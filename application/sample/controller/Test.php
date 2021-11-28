<?php


namespace app\sample\controller;


use think\Request;

class Test
{
//    public function hello($id, $name)
//    {
//        echo $id;
//        echo $name;
////     return 'hello, qiyue';
//    }
//1. Request::instance()->param();	//调用Request类
//2. input('param.');				//助手函数
//3. public function hello(Reqeust $request)
//{
//    //依赖注入
//    $request->param();
//}

    public function hello()
    {

        $request = new Request();
//        $all = $request->param();
//        $all = $request->post();
//        $all = input('param.');
//        var_dump($all);

        $id = $request->param('id');
        $name = $request->param('name');
        $age = $request->param('age');
        echo $id;
        echo $name;
        echo $age;
    }
}