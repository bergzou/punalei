<?php
namespace app\common\library\storage\driver;

use app\common\exception\UploadException;
use app\common\library\storage\Driver;
use app\common\model\Attachment;
use think\File;

class Local implements Driver
{
    protected $uploader;

    public function __construct($uploader)
    {
        $this->uploader = $uploader;
    }

    public function upload($savekey = null)
    {
        // 直接调用原有本地上传逻辑
        return $this->uploader->localUpload($savekey);
    }

    public function chunk($chunkid, $chunkindex, $chunkcount)
    {
        // 调用原有分片处理逻辑
        return $this->uploader->localChunk($chunkid, $chunkindex, $chunkcount);
    }

    public function merge($chunkid, $chunkcount, $filename)
    {
        // 调用原有合并逻辑
        return $this->uploader->localMerge($chunkid, $chunkcount, $filename);
    }

    public function clean($chunkid)
    {
        // 调用原有清理逻辑
        $this->uploader->localClean($chunkid);
    }
}