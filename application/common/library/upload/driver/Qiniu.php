<?php
namespace app\common\library\upload\driver;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use think\File;

class Qiniu
{
    protected $config;
    protected $error;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function upload($file, $saveName)
    {
        $auth = new Auth(
            $this->config['accessKey'],
            $this->config['secretKey']
        );

        $token = $auth->uploadToken($this->config['bucket']);
        $uploadMgr = new UploadManager();

        list($ret, $err) = $uploadMgr->putFile(
            $token,
            $saveName,
            $file->getRealPath()
        );

        if ($err !== null) {
            $this->error = $err->message();
            return false;
        }

        return [
            'url' => $this->config['domain'] . '/' . $ret['key'],
            'path' => $ret['key']
        ];
    }

    public function getError()
    {
        return $this->error;
    }
}