<?php


namespace app\lib\exception;


class BaseException
{
    // HTTP 状态 404, 200
    public $code = 400;

    // 错误信息
    public $msg = 'error';

    // 自定义的错误吗
    public $errorCode = 10000;

}