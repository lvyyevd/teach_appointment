<?php
namespace app\common\validate;
use app\common\model\teacher;
use think\Validate;     // 内置验证类

class Register extends Validate
{
    protected $rule = [
            'username' => 'require|max:25|checkName:用户已存在！',
            'password' => 'require|max:25',
            'name' => 'require|max:25',
            'mail' => 'require|max:25:mailerror',
        ];

    // 自定义验证规则
    protected function checkName($value,$rule,$data=[],$name,$description)
    {
        $map=array('username' => $value);
        if(teacher::get($map))
        {
                return $rule;
        }
        else
        {
            return true;
        }
    }
}

?>