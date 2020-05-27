<?php
namespace app\common\validate;
use think\Validate;     // 内置验证类

class Update extends Validate
{

    protected $rule = [
        'major'      => 'require|max:25:',
        'addr'       => 'require|max:25:',
        'nums'       => 'require|max:25|between:1,120:',
        'start_time' => 'require|max:25|checkTime:开始时间不能晚于结束时间',
        'end_time'   => 'require|max:25:',
    ];

    // 自定义验证规则
    protected function checkTime($value,$rule,$data=[],$name,$description)
    {

    	if(strtotime($_POST['starttime']) > strtotime($_POST['endtime']))
    	{
                return $rule;
        }
        else
        {
            return true;
        }
    }
}