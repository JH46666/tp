<?php


namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:15',
        'email' => 'email'
    ];
}