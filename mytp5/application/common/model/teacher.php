<?php
namespace app\common\model;
use think\Model;

class teacher extends Model
{
	//教师登录
	static public function login($username, $password)
	{
		$map=array('username'  => $username);
		$teacher=self::get($map);//自己调用自己self
		if(!is_null($teacher))
		{
			//if($teacher->getData('password')===$password)
			if($teacher->checkPassword($password))
			{//登录成功
				session('teacherId',$teacher->getdata('id'));
				session('teacherUsername',$teacher->getdata('username'));
				return true;
			}
		}
		return false;//登录失败
	}

	//注销
	static public function logOut()
	{
		//销毁session中的数据
		session('teacherId',null);
		session('teacherUsername',null);
		return true;
	}


	//验证密码
	public function checkPassword($password)
	{//$this->getdata('password')
		if($this->getdata('password') === $this::encryptPassword($password))
		{
			return true;
		}
		else
		{	return false;}
	}

	//加密算法
	static public function encryptPassword($password)
	{
		return sha1(md5($password).'tp5');
	}

}

?>