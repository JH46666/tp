<?php


namespace app\api\validate;

use Exception;
use think\Validate;
use think\Request;
use think\exception\Handle;
use think\exception\HttpException;
use think\exception\ValidateException;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数做校验
        $request = new Request();
        $params = $request->param();
        $id = $request->param('id');
        $result = $this->check($id);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        } else {
            return true;
        }

//        // 参数验证错误
//        if ($e instanceof ValidateException) {
//            return json($e->getError(), 422);
//        }
//
//        // 请求异常
//        if ($e instanceof HttpException && request()->isAjax()) {
//            return response($e->getMessage(), $e->getStatusCode());
//        }

        // 其他错误交给系统处理
//        return parent::render($e);
    }
}