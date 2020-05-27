<?php
namespace app\common\validate;
use think\Validate;     // 内置验证类

class Login extends Validate
{
    protected $rule = [
        'username' => 'require|max:25:',
        'password' => 'require|max:25:',
    ];
}