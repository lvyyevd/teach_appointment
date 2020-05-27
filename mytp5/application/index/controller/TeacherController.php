<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\teacher;
use app\common\model\active;
use app\common\model\appoint;


use think\Request;

	//老师登录进去之后的操作界面，管理发布活动
class TeacherController extends Controller
{
	
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $map=array('id' => session('teacherId'));
        if($map["id"] == null){
            return $this->error("login first!",url('/index/index'));
        }
    }
    
    //教师登录首页
    public function index()
	{
		//显示教师发布的活动
		$Active =new active;
		$map=array('tea_id'=>session('teacherId'));
		$actives=$Active->where($map)->select();
		$this->assign('actives',$actives);
		$html=$this->fetch();
		return $html;
	}

	//注销
	public function logOut()
	{
		if(teacher::logOut())
		{
			$this->success("logout success!",url('Index/index'));
		}
		else
		{
			return $this->error("logout error!",url('index'));
		}
	}


	//增加活动
	public function add()
	{		
        $getData=Request::instance()->get();
        //更具session获得教师的基本信息
        $map=array('id' => session('teacherId'));
        $teacher=teacher::get($map);
        $active=new active;
        $active->tea_id    = $teacher->id;
        $active->tea_name  = $teacher->name;
        $this->assign('tip',$tip='添加活动');
        if($getData)
        {
            $active->major     = $getData['major'];
            $active->start_time= $getData['starttime'];
            $active->end_time  = $getData['endtime'];
            $active->addr      = $getData['addr'];
            $active->nums      = $getData['nums'];

            $data = [
                'major' => $getData['major'],
                'addr' =>  $getData['addr'],
                'nums' =>  (int)$getData['nums'],
                'start_time' => $getData['starttime'],
                'end_time' =>  $getData['endtime'],
            ];
            //var_dump($data);
            $validate = new \app\common\validate\Active();

            if (!$validate->check($data)){
                $this->assign('tip',$tip=$validate->getError());
            }

            else{
                if($active->save())
                    $this->assign('tip',$tip='修改成功');
            }
        }
		$html=$this->fetch();
		return $html;
	}


	//删除活动
	public function delete()
	{
		$map=Request::instance()->get();
		$active=active::get($map);
		// 要删除的对象不存在
        if (is_null($active)) {
            return $this->error('不存在id为' . $map[1] . '的活动，删除失败');
        }
        // 删除对象
        if (!$active->delete()) {
            return $this->error('删除失败:' . $Teacher->getError());
        }
        // 进行跳转
        return $this->success('删除成功', url('index'));
	}

    //显示活动的预约情况
    public function appoint_show()
    {
        $act_id=array('act_id'=>Request::instance()->get('act_id'));
        $Appoint =new appoint;
        $appoint=$Appoint->where($act_id)->select();
        $this->assign('appoint',$appoint);
        $html=$this->fetch();
        return $html;

    }


    // 审核
    public function audit()
    {
        $status = Request::instance()->get('status');
        $act_id=array('act_id'=>Request::instance()->get('act_id'));
        $Appoint =new appoint;
        if ($status == "1") {
            $flag = array('status' => "同意");
            $appoint = $Appoint->where($act_id)->setField($flag);
        }
        else if ($status == "0"){
            $flag = array('status'=>"不同意");
            $appoint=$Appoint->where($act_id)->setField($flag);
        }
        else
            return $this->error('参数错误' );
        return $this->redirect('/mytp5/public/index/teacher/appoint_show?&act_id='.Request::instance()->get('act_id'));
    }


	
    //完善个人信息
    //显示教师个人信息
	public function information()
	{
        $map=array('id' => session('teacherId'));
        $teacher=teacher::get($map);
        $this->assign('teacher',$teacher);
        if(!$postData=Request::instance()->post())
        {
            $this->assign('tip',$tip='请填写修改信息:');
            return $this->fetch();
        }
        else
        {
            $teacher=new teacher;
            $data = [
            'id' => session('teacherId'),
            'name' => $postData['username'],
            'sex' => $postData['sex'],
            'age' => (int)$postData['age'],
            'phone' => $postData['phone'],
            'mail' => $postData['mail'],
            'addr' => $postData['addr'],
            'major' => $postData['major'],
            //'password' => '111',
            ];
            $validate = new \app\common\validate\Teacher();
            if (!$validate->check($data))
            {
                $this->assign('tip',$tip=$validate->getError());
                //return ($validate->getError());
            }

            else{
                if($teacher->isUpdate(true)->save($data))
                    $this->assign('tip',$tip='修改成功!');
                else
                    $this->assign('tip',$tip='信息未变!');
                $teacher=teacher::get($map);
                $this->assign('teacher',$teacher);

            }
		    return $this->fetch();
        }
	}
    //修改活动信息
    public function update()
    {
        if($getData=Request::instance()->get())
        {
            $map=array('act_id' => $getData['act_id']);
            $active=active::get($map);
            $this->assign('active',$active);
            $this->assign('tip',$tip='请填写修改信息:');
        }
        else if($postData=Request::instance()->post())
        {
            $map=array('act_id' => $postData['act_id']);
            $active=active::get($map);
            $this->assign('active',$active);
            $active->major     = $postData['major'];
            $active->start_time= $postData['starttime'];
            $active->end_time  = $postData['endtime'];
            $active->addr      = $postData['addr'];
            $active->nums      = $postData['nums'];

            $data = [
                'major' => $postData['major'],
                'start_time' => $postData['starttime'],
                'end_time' => $postData['endtime'],
                'addr' =>  $postData['addr'],
                'nums' =>  (int)$postData['nums'],
            ];
            $validate = new \app\common\validate\Update();

            if (!$validate->check($data)){
                $this->assign('tip',$tip=$validate->getError());
            }
            else{
                if($active->isUpdate(true)->save($data))
                    $this->assign('tip',$tip='修改活动成功！');
                $active=active::get($map);
                $this->assign('active',$active);
            }
        }
        return $this->fetch();
    }



    //教师查看活动信息
    public function active()
    {
        //echo "active";
        //根据act_id显示活动的详细信息
        $getData=Request::instance()->get();
        //return var_dump($getData);
        //活动详细信息
        $active=active::get($getData);
        $this->assign('active',$active);

        //预约人数
        $appoint=appoint::where($getData)->count();
        $this->assign('appoint',$appoint);

        //发布人信息
        $map=array('id' => $active->getData('tea_id'));
        $teacher=teacher::get($map);
        $this->assign('teacher',$teacher);

        return $this->fetch();
    }
}

?>