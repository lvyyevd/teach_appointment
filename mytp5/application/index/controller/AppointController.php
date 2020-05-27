<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\teacher;
use app\common\model\active;
use app\common\model\appoint;
use think\Request;

class AppointController extends Controller
{
    public function appoint()
    {
        $act_id=Request::instance()->post('act_id');
        $professional=Request::instance()->post('professional');
        $stu_class=Request::instance()->post('stu_class');
        $stu_name=Request::instance()->post('stu_name');
        $student_num=Request::instance()->post('student_num');
        $phone_num=Request::instance()->post('phone_num');
        
        //根据session获得教师的基本信息
        $appoint=new appoint;
        $appoint->act_id    = $act_id;
        $appoint->professional  = $professional;
        $appoint->stu_class     = $stu_class;
        $appoint->stu_name= $stu_name;
        $appoint->student_num  = $student_num;
        $appoint->phone_num      = $phone_num;
        $appoint->status      = "未审核";

        $state= $appoint->save();
        if($state){
            return $this->success('预约成功！', url('index/index'));
        }
        else{
            return $this->error('预约失败！', url('index/index'));
        }

    }
}