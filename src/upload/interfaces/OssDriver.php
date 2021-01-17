<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/xuntee/easy-admin
// +----------------------------------------------------------------------

namespace EasyAdmin\upload\interfaces;

interface OssDriver
{

    public function save($objectName,$filePath);

}