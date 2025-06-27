<?php
namespace app\common\library\storage\driver;

use app\common\exception\UploadException;
use app\common\library\storage\Driver;
use app\common\model\Attachment;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Qiniu\Storage\BucketManager;
use think\File;

class Qiniu implements Driver
{
    protected $config;
    protected $uploader;

    public function __construct($uploader, $config)
    {
        $this->uploader = $uploader;
        $this->config = $config;
    }

    public function upload($savekey = null)
    {
        $file = $this->uploader->getFile();
        $savekey = $savekey ?: $this->uploader->getSavekey();

        $savekey = ltrim($savekey, '/'); // 关键修复：去除前导斜杠


        // 初始化七牛认证
        $auth = new Auth($this->config['access_key'], $this->config['secret_key']);
        $token = $auth->uploadToken($this->config['bucket']);

        // 上传文件
        $uploadMgr = new UploadManager();

        list($ret, $err) = $uploadMgr->putFile($token, $savekey, $file->getRealPath());

        if ($err !== null) {
            throw new UploadException('七牛云上传失败: ' . $err->message());
        }

        // 构建附件数据
        return $this->saveAttachment($savekey, 'qiniu');
    }

    public function chunk($chunkid, $chunkindex, $chunkcount)
    {
        // 七牛云需前端直传分片，此处仅返回上传凭证
        $savekey = $this->uploader->getSavekey();
        $auth = new Auth(
            $this->config['access_key'],
            $this->config['secret_key']
        );
        $policy = [
            'saveKey' => $savekey,
            'mimeLimit' => $this->uploader->getMimetypeLimit(),
        ];
        return [
            'token' => $auth->uploadToken($this->config['bucket'], null, 3600, $policy),
            'key'   => $savekey
        ];
    }

    public function merge($chunkid, $chunkcount, $filename)
    {
        // 七牛云分片上传由前端完成，此处仅记录文件
        $savekey = $this->uploader->getSavekey(null, $filename);
        return $this->saveAttachment($savekey, 'qiniu');
    }

    public function clean($chunkid)
    {
        // 七牛云无需清理本地分片
        return true;
    }

    protected function saveAttachment($savekey, $storage)
    {
        $fileInfo = $this->uploader->getFileInfo();
        $auth = \app\common\library\Auth::instance();
        // 确保配置域名格式正确（无尾部斜杠）
        $domain = rtrim($this->config['domain'], '/');

        // 规范化保存路径（去除前导斜杠）
        $savekey = ltrim($savekey, '/');

        // 保存相对路径到数据库（规范化格式）
        $relativePath = $savekey;

        // 构建完整URL（避免双斜杠）
        $fullurl = $domain . '/' . $savekey;

        return Attachment::create([
            'admin_id'    => (int)session('admin.id'),
            'user_id'     => (int)$auth->id,
            'filename'    => mb_substr(strip_tags($fileInfo['name']), 0, 100),
            'filesize'    => $fileInfo['size'],
            'imagewidth'  => $fileInfo['imagewidth'],
            'imageheight' => $fileInfo['imageheight'],
            'mimetype'    => $fileInfo['type'],
            'url'         => $fullurl ,
            'storage'     => $storage,
            'uploadtime'  => time(),
            'sha1'        => $this->uploader->getFileHash()
        ]);
    }
}