<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

//Route::get('hello/:name', 'index/hello');

//Route::rule('hello', 'sample/Test/hello', 'GET', ['https' => false]);
Route::rule('index', 'index/Index/hello');

//Route::get('hello/:id', 'sample/Test/hello');
Route::post('hello/:id', 'sample/Test/hello');

Route::get('banner/:id', 'api/v1.Banner/getBanner');
return [

];
