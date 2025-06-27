<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\exception\UploadException;
use app\common\library\Upload;
use fast\Random;
use think\addons\Service;
use think\Cache;
use think\Config;
use think\Db;
use think\Lang;
use think\Loader;
use think\Response;
use think\Validate;

/**
 * Ajax异步请求接口
 * @internal
 */
class Ajax extends Backend
{
    protected $noNeedLogin = ['lang'];
    protected $noNeedRight = ['*'];
    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();

        //设置过滤方法
        $this->request->filter(['trim', 'strip_tags', 'htmlspecialchars']);
    }

    /**
     * 加载语言包
     */
    public function lang()
    {
        $this->request->get(['callback' => 'define']);
        $header = ['Content-Type' => 'application/javascript'];
        if (!config('app_debug')) {
            $offset = 30 * 60 * 60 * 24; // 缓存一个月
            $header['Cache-Control'] = 'public';
            $header['Pragma'] = 'cache';
            $header['Expires'] = gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
        }

        $controllername = $this->request->get('controllername');
        $lang = $this->request->get('lang');
        if (!$lang || !in_array($lang, config('allow_lang_list')) || !$controllername || !preg_match("/^[a-z0-9_\.]+$/i", $controllername)) {
            return jsonp(['errmsg' => '参数错误'], 200, [], ['json_encode_param' => JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE]);
        }

        $controllername = input("controllername");
        $className = Loader::parseClass($this->request->module(), 'controller', $controllername, false);

        //存在对应的类才加载
        if (class_exists($className)) {
            $this->loadlang($controllername);
        }

        return jsonp(Lang::get(), 200, $header, ['json_encode_param' => JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE]);
    }



    public function upload()
    {

        Config::set('default_return_type', 'json');
        Config::load(APP_PATH . 'extra/upload.php', 'upload');


        $chunkid = $this->request->post("chunkid");
        if ($chunkid) {
            if (!Config::get('upload.chunking')) {
                $this->error(__('Chunk file disabled'));
            }

            $action = $this->request->post("action");
            $chunkindex = $this->request->post("chunkindex/d");
            $chunkcount = $this->request->post("chunkcount/d");
            $filename = $this->request->post("filename");
            $method = $this->request->method(true);


            // ================== 七牛云分片处理 ==================
            if ($action == 'merge') {
                try {
                    // 获取当前存储驱动配置
                    $driver = config('upload.default');
                    $config = config("upload.drivers.{$driver}");

                    // 生成最终保存路径
                    $saveName = $this->generateSaveName($filename, $config, null);

                    // 七牛云分片上传完成逻辑
                    $auth = new \Qiniu\Auth($config['accessKey'], $config['secretKey']);
                    $uploadMgr = new \Qiniu\Storage\UploadManager();

                    // 获取所有分片的ETag信息
                    $etags = cache('qiniu_etags_' . $chunkid) ?: [];
                    if (count($etags) !== $chunkcount) {
                        throw new \Exception('分片数量不匹配，无法合并');
                    }

                    // 七牛云没有直接的合并API，需要重命名临时文件
                    $tempKey = $chunkid; // 临时文件名使用chunkid

                    // 创建BucketManager实例
                    $bucketMgr = new \Qiniu\Storage\BucketManager($auth);

                    // 重命名临时文件为最终文件名
                    list($ret, $err) = $bucketMgr->rename(
                        $config['bucket'],
                        $tempKey,
                        $saveName
                    );

                    if ($err !== null) {
                        throw new \Exception('文件重命名失败: ' . $err->message());
                    }

                    // 构建文件URL
                    $url = $config['domain'] . '/' . $saveName;
                    $filePath = $saveName;

                    // 如果是私有空间，生成签名URL
                    if ($config['private'] ?? false) {
                        $url = $auth->privateDownloadUrl($url, $config['expires'] ?? 3600);
                    }

                    // 保存到附件表
                    $attachment = new Attachment();
                    $attachment->url = $url;
                    $attachment->path = $filePath;
                    $attachment->storage = $driver;
                    $attachment->uploadtime = time();
                    $attachment->save();

                    // 清理缓存
                    cache('qiniu_etags_' . $chunkid, null);

                    $this->success(__('Uploaded successful'), '', [
                        'url' => $url,
                        'fullurl' => $url
                    ]);

                } catch (\Exception $e) {
                    $this->error($e->getMessage());
                }
            } elseif ($method == 'clean') {
                try {
                    // 清理分片缓存
                    cache('qiniu_etags_' . $chunkid, null);

                    // 删除七牛云上的临时文件
                    $auth = new \Qiniu\Auth(config("upload.drivers.qiniu.accessKey"), config("upload.drivers.qiniu.secretKey"));
                    $bucketMgr = new \Qiniu\Storage\BucketManager($auth);
                    $bucketMgr->delete(config("upload.drivers.qiniu.bucket"), $chunkid);

                    $this->success();
                } catch (\Exception $e) {
                    $this->error('清理失败: ' . $e->getMessage());
                }
            } else {
                // 分片上传
                $file = $this->request->file('file');
                try {
                    // 获取当前存储驱动配置
                    $driver = config('upload.default');
                    $config = config("upload.drivers.{$driver}");

                    // 七牛云分片上传
                    $auth = new \Qiniu\Auth($config['accessKey'], $config['secretKey']);
                    $uploadMgr = new \Qiniu\Storage\UploadManager();

                    // 获取分片上传凭证
                    $token = $auth->uploadToken($config['bucket'], $chunkid); // 使用chunkid作为文件名

                    // 上传分片
                    list($ret, $err) = $uploadMgr->put(
                        $token,
                        $chunkid, // 使用chunkid作为文件名
                        file_get_contents($file->getRealPath())
                    );

                    if ($err !== null) {
                        throw new \Exception('分片上传失败: ' . $err->message());
                    }

                    // 保存分片的ETag信息（虽然七牛云不需要合并，但我们用于验证分片数量）
                    $etags = cache('qiniu_etags_' . $chunkid) ?: [];
                    $etags[$chunkindex] = $ret['hash'];
                    cache('qiniu_etags_' . $chunkid, $etags, 86400);

                    $this->success();

                } catch (\Exception $e) {
                    $this->error($e->getMessage());
                }
            }
        } else {
            // ================== 普通文件上传 ==================
            $file = $this->request->file('file');
            try {
                // 获取当前存储驱动配置
                $driver = config('upload.default');
                $config = config('upload.drivers';;.'.$driver);
                var_dump($config);die;
                // 使用七牛云驱动
                $engine = new \app\common\library\upload\driver\Qiniu($config);

                // 生成保存文件名
                $saveName = $this->generateSaveName($file->getOriginalName(), $config, $file);


                // 执行上传
                $result = $engine->upload($file, $saveName);

                if (!$result) {
                    throw new \Exception($engine->getError());
                }

                // 如果是私有空间，生成签名URL
                $url = $result['url'];
                if ($config['private'] ?? false) {
                    $auth = new \Qiniu\Auth($config['accessKey'], $config['secretKey']);
                    $url = $auth->privateDownloadUrl($url, $config['expires'] ?? 3600);
                }

                // 保存到附件表
                $attachment = new Attachment();
                $attachment->url = $url;
                $attachment->path = $result['path'];
                $attachment->storage = $driver;
                $attachment->uploadtime = time();
                $attachment->save();

                $this->success(__('Uploaded successful'), '', [
                    'url' => $url,
                    'fullurl' => $url
                ]);

            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        }
    }

    /**
     * 生成保存文件名
     * @param string $filename 原始文件名
     * @param array $config 上传配置
     * @param \think\File|null $file 文件对象（仅普通上传可用）
     * @return string
     */
    private function generateSaveName($filename, $config, $file = null)
    {
        // 使用FastAdmin的保存规则
        $savekey = $config['savekey'] ?? '/{year}{mon}{day}/{random32}{.suffix}';

        // 获取文件扩展名
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        // 替换路径中的变量
        $replace = [
            '{year}'     => date("Y"),
            '{mon}'      => date("m"),
            '{day}'      => date("d"),
            '{hour}'     => date("H"),
            '{min}'      => date("i"),
            '{sec}'      => date("s"),
            '{random}'   => \think\helper\Str::random(16),
            '{random32}' => \think\helper\Str::random(32),
            '{filename}' => substr(pathinfo($filename, PATHINFO_FILENAME), 0, 100),
            '{suffix}'   => $ext,
            '{.suffix}'  => $ext ? '.'.$ext : '',
        ];

        // 处理filemd5 - 仅在普通上传时可用
        if (strpos($savekey, '{filemd5}') !== false) {
            if ($file && $file->getRealPath()) {
                $replace['{filemd5}'] = md5_file($file->getRealPath());
            } else {
                // 分片上传使用随机值替代
                $replace['{filemd5}'] = \think\helper\Str::random(32);
            }
        }

        $savename = str_replace(
            array_keys($replace),
            array_values($replace),
            $savekey
        );

        // 移除可能的斜杠前缀
        return ltrim($savename, '/');
    }
    



    /**
     * 通用排序
     */
    public function weigh()
    {
        //排序的数组
        $ids = $this->request->post("ids");
        //拖动的记录ID
        $changeid = $this->request->post("changeid");
        //操作字段
        $field = $this->request->post("field");
        //操作的数据表
        $table = $this->request->post("table");
        if (!Validate::is($table, "alphaDash")) {
            $this->error();
        }
        //主键
        $pk = $this->request->post("pk");
        //排序的方式
        $orderway = strtolower($this->request->post("orderway", ""));
        $orderway = $orderway == 'asc' ? 'ASC' : 'DESC';
        $sour = $weighdata = [];
        $ids = explode(',', $ids);
        $prikey = $pk && preg_match("/^[a-z0-9\-_]+$/i", $pk) ? $pk : (Db::name($table)->getPk() ?: 'id');
        $pid = $this->request->post("pid", "");
        //限制更新的字段
        $field = in_array($field, ['weigh']) ? $field : 'weigh';

        // 如果设定了pid的值,此时只匹配满足条件的ID,其它忽略
        if ($pid !== '') {
            $hasids = [];
            $list = Db::name($table)->where($prikey, 'in', $ids)->where('pid', 'in', $pid)->field("{$prikey},pid")->select();
            foreach ($list as $k => $v) {
                $hasids[] = $v[$prikey];
            }
            $ids = array_values(array_intersect($ids, $hasids));
        }

        $list = Db::name($table)->field("$prikey,$field")->where($prikey, 'in', $ids)->order($field, $orderway)->select();
        foreach ($list as $k => $v) {
            $sour[] = $v[$prikey];
            $weighdata[$v[$prikey]] = $v[$field];
        }
        $position = array_search($changeid, $ids);
        $desc_id = $sour[$position] ?? end($sour);    //移动到目标的ID值,取出所处改变前位置的值
        $sour_id = $changeid;
        $weighids = [];
        $temp = array_values(array_diff_assoc($ids, $sour));
        foreach ($temp as $m => $n) {
            if ($n == $sour_id) {
                $offset = $desc_id;
            } else {
                if ($sour_id == $temp[0]) {
                    $offset = $temp[$m + 1] ?? $sour_id;
                } else {
                    $offset = $temp[$m - 1] ?? $sour_id;
                }
            }
            if (!isset($weighdata[$offset])) {
                continue;
            }
            $weighids[$n] = $weighdata[$offset];
            Db::name($table)->where($prikey, $n)->update([$field => $weighdata[$offset]]);
        }
        $this->success();
    }

    /**
     * 清空系统缓存
     */
    public function wipecache()
    {
        try {
            $type = $this->request->request("type");
            switch ($type) {
                case 'all':
                case 'content':
                    //内容缓存
                    rmdirs(CACHE_PATH, false);
                    Cache::clear();
                    if ($type == 'content') {
                        break;
                    }
                    // no break
                case 'template':
                    // 模板缓存
                    rmdirs(TEMP_PATH, false);
                    if ($type == 'template') {
                        break;
                    }
                    // no break
                case 'addons':
                    // 插件缓存
                    Service::refresh();
                    if ($type == 'addons') {
                        break;
                    }
                    // no break
                case 'browser':
                    // 浏览器缓存
                    // 只有生产环境下才修改
                    if (!config('app_debug')) {
                        $version = config('site.version');
                        $newversion = preg_replace_callback("/(.*)\.([0-9]+)\$/", function ($match) {
                            return $match[1] . '.' . ($match[2] + 1);
                        }, $version);
                        if ($newversion && $newversion != $version) {
                            Db::startTrans();
                            try {
                                \app\common\model\Config::where('name', 'version')->update(['value' => $newversion]);
                                \app\common\model\Config::refreshFile();
                                Db::commit();
                            } catch (\Exception $e) {
                                Db::rollback();
                                exception($e->getMessage());
                            }
                        }
                    }
                    if ($type == 'browser') {
                        break;
                    }
            }
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

        \think\Hook::listen("wipecache_after");
        $this->success();
    }

    /**
     * 读取分类数据,联动列表
     */
    public function category()
    {
        $type = $this->request->get('type', '');
        $pid = $this->request->get('pid', '');
        $where = ['status' => 'normal'];
        $categorylist = null;
        if ($pid || $pid === '0') {
            $where['pid'] = $pid;
        }
        if ($type) {
            $where['type'] = $type;
        }

        $categorylist = Db::name('category')->where($where)->field('id as value,name')->order('weigh desc,id desc')->select();

        $this->success('', '', $categorylist);
    }

    /**
     * 读取省市区数据,联动列表
     */
    public function area()
    {
        $params = $this->request->get("row/a");
        if (!empty($params)) {
            $province = isset($params['province']) ? $params['province'] : null;
            $city = isset($params['city']) ? $params['city'] : null;
        } else {
            $province = $this->request->get('province');
            $city = $this->request->get('city');
        }
        $where = ['pid' => 0, 'level' => 1];
        $provincelist = null;
        if ($province !== null) {
            $where['pid'] = $province;
            $where['level'] = 2;
            if ($city !== null) {
                $where['pid'] = $city;
                $where['level'] = 3;
            }
        }
        $provincelist = Db::name('area')->where($where)->field('id as value,name')->select();
        $this->success('', '', $provincelist);
    }

    /**
     * 生成后缀图标
     */
    public function icon()
    {
        $suffix = $this->request->request("suffix");
        $suffix = $suffix ? $suffix : "FILE";
        $data = build_suffix_image($suffix);
        $header = ['Content-Type' => 'image/svg+xml'];
        $offset = 30 * 60 * 60 * 24; // 缓存一个月
        $header['Cache-Control'] = 'public';
        $header['Pragma'] = 'cache';
        $header['Expires'] = gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
        $response = Response::create($data, '', 200, $header);
        return $response;
    }
}
