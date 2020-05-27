<?php
namespace app\index\controller;
use think\Controller;
use app\common\model\teacher;
use app\common\model\active;
use think\Request;

class LoginController extends Controller
{


	// 验证用户名是否存在
	// 验证密码是否正确
	// 用户名密码正确 ，将teacherId 存session
	// 用户名密码错误，跳转到登录界面
	public function login()
	{
		$postData=Request::instance()->post();//接收post数据
		//echo "123=>".teacher::encryptPassword("123")."<br>";
		//echo "456=>".teacher::encryptPassword("456")."<br>";
		//return "e";
		$data = [
			'username' => $postData['username'],
			'password' => $postData['password'],
		];
		$validate = new \app\common\validate\Login();
		if (!$validate->check($data)){
                return $this->error($validate->getError(),url('/index/index'));
            }

		if(teacher::login($postData['username'],$postData['password']))
		{
			return $this->success("login success!",url("Teacher/index"));
		}
		else
		{
			return $this->error("username or password not incorrect!",url("Index/index"));
		}
	}

	//教师注册功能
	public function register()
	{
		//获取注册信息
		$postData=Request::instance()->post();
		//return var_dump($postData);
		//验证信息格式
		$data = [
			'username' => $postData['username'],
			'password' => $postData['password'],
			'name' => $postData['name'],
			'mail' => $postData['mail'],
		];
		$validate = new \app\common\validate\Register();

            if (!$validate->check($data)){
                return $this->error($validate->getError(),url('/index/index'));
            }
            else{
            	//数据格式正确
            	//新用户
            	if($postData['password'] != $postData['passwd'])
            		return $this->error("密码不一致！",url('/index/index'));
            	$teacher = new teacher;
            	//注册成功
            	$data['password'] = teacher::encryptPassword($data['password']);
                if($teacher->save($data))
                    return $this->success("注册成功，请登录！",url('/index/index'));
            } 		
	}
}
?>