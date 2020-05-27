<?php
namespace app\common\validate;
use think\Validate;     // 内置验证类

class Teacher extends Validate
{
    protected $rule = [
            'id'    => 'require|max:25:iderror',
            'name'  => 'require|max:25:nameerror',
            'sex'   => 'require|max:25|checkSex:性别只能为男/女',
            'age'   => 'number|max:25|between:1,120:ageerror',
            'phone' => 'require|max:25:phoneerror',
            'mail'  => 'require|max:25:mailerror',
            'addr'  => 'require|max:25:addrerror',
            'major' => 'require|max:25:majorerror',
        ];

    // 自定义验证规则
    protected function checkSex($value,$rule,$data=[],$name,$description)
    {
        ;
        if($value== '男' || $value == '女')
        {
                return true;
        }
        else
        {
            return $rule;
        }
    }
}

?>