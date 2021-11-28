<?php


namespace app\api\validate;
use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id'    => 'require|isPositiveInteger',
    ];

    /**
     * @param array $value 传入待验证的数据
     * @param string $rule 验证规则
     * @param string $data 原始数据
     * @param string $field
     * @return void
     */
    protected function isPositiveInteger($value, $rule, $data, $field)
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            // 不符合我们的条件，返回错误信息；在控制器中可以用getError（）方法输出
            return $field . '必须是正整数';
        }
    }
}