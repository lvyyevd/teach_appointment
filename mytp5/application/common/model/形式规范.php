形式规范：

目标：简明易读，，一眼明了函数、变量的含义

页面：
开发采用MVC框架，

M：Model 模型层 获取数据并处理返回数据

V：View 视图层 将获得的数据进行组织，美化等，并最终向用户输出，可以直观的看到web界面

C：Controller 控制器层  调用模型并调用视图，将模型产生的数据传递给视图 让相关的视图显示，


 模块与控制器对应，控制器命名时要在后面加上Controller后缀，
 如：teacher模块 对应 teacherController控制器

 为每个用户群体专门建立一个 模块(Model) ，模块内的类负责具体功能的实现，
 而且，每个函数实现一个功能，尽可能将类的方法细分，

 如：为教师专门建立一个Model：teacher.php,教师的登录需要验证、加密几个方面
 	 分成login() checkPassword() encryptPassword()几个函数


<?php
class teacher extends Model
{
	//教师登录
	static public function login($username, $password)
	{
		if($teacher->checkPassword($password))
			{	//登录成功
				return true;
			}
	}

	//验证密码
	public function checkPassword($password)
	{

	}

	//加密算法
	static public function encryptPassword($password)
	{
		return sha1(md5('$password').'tp5');
	}
}
?>



注释：
类中的每个方法前都要有注释，说明函数功能，并适当用空行分隔
函数中适当进行注释

函数&变量：
采用驼峰式命名法，遵循“最小长度下最大信息量”原则，避免重名
函数内可适当采用空行使结构更加清晰

如：
登录控制器文件 loginController.php
<?php
class loginController extends Controller
{
	//用户登录界面
	public function index()
	{}

	// 验证用户名是否存在
	// 验证密码是否正确
	// 用户名密码正确 ，将teacherId 存session
	// 用户名密码错误，跳转到登录界面
	public function login()
	{}
}
?>
