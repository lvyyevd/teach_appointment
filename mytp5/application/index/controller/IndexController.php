<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\teacher;
use app\common\model\active;
use app\common\model\appoint;
use think\Request;

class IndexController extends Controller
{
	//网站首页，显示基本的活动信息
	public function index()
	{

		//查询
		$name=Request::instance()->get('name');
		$option=Request::instance()->get('optionsRadios');
		//分页显示所有教师发布的活动
		$pageSize=5;
		$Active =new active;
		$Appoint= new appoint;
		if (!empty($name))
		{
			if($option == 'option1')
			{
				$Active->where('tea_name', 'like', '%' . $name . '%');//查询活动
				$Active->where('start_time','> time',date("Y-m-d H:i:s"));//显示未过期活动
				$actives=$Active->paginate($pageSize, false, ['query' => ['name' => $name]]);
			}
			else if($option == 'option2')
			{
				return $this->redirect('/mytp5/public/index/index/stusearch?&name='.$name);
			}
        }
        else
        {
        	$Active->where('start_time','> time',date("Y-m-d H:i:s"));//显示未过期活动
			$actives=$Active->paginate($pageSize, false, ['query' => ['name' => $name]]);
		}
		$this->assign('actives',$actives);
		$html=$this->fetch();
		
		if(session('teacherId'))
		{
			return redirect('index/index/test');
		}
		else
			return $html;
	}


	//已登陆,显示欢迎xxx
	public function test()
	{
		$Active =new active;
		$pageSize=5;
		$Active->where('start_time','> time',date("Y-m-d H:i:s"));//显示未过期活动
		$actives=$Active->paginate($pageSize, false, ['query' => []]);
		$this->assign('actives',$actives);
		return view();
	}


	//学生查询预约的活动
	public function stusearch()
	{
		$name=Request::instance()->get('name');
		$option=Request::instance()->get('optionsRadios');
		$pageSize=5;
		//显示学生预约的活动
		$Appoint= new appoint;
		$Active =new active;
		if($option == 'option1')
		{
			return $this->redirect('/mytp5/public/index/index/index?&name='.$name.'&optionsRadios=option1');
		}

		$Appoint->where('student_num', 'like', '%' . $name . '%');
		$actives=$Appoint->paginate($pageSize, false, ['query' => ['name' => $name]]);
		$this->assign('actives',$actives);
		$html=$this->fetch();
		
		if(session('teacherId'))
		{
			return redirect('index/index/test');
		}
		else
			return $html;
	}


	//显示活动详细信息
	public function active()
	{
		//根据act_id显示活动的详细信息
		$getData=Request::instance()->get();
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