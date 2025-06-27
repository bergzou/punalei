<?php
namespace app\common\library\storage;

interface Driver
{
    public function upload($savekey = null);
    public function chunk($chunkid, $chunkindex, $chunkcount);
    public function merge($chunkid, $chunkcount, $filename);
    public function clean($chunkid);
}