<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\phpstudy\PHPTutorial\WWW\mytp5\public/../application/index\view\index\stusearch.html";i:1590378436;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>教师页面</title>
    <link rel="stylesheet" type="text/css" href="/mytp5/public/static/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('#appoint').modal("hide");
        function values(ID){
            $('#act_id').val(ID);
        }
    </script>
</head>

<body class="container">
    
    <!-- 菜单导航 -->
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo url('Index/index'); ?>">网站首页</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">活动管理</a></li>
                            <li><a href="#">完善信息</a></li>
                            <li><a href="#">班级管理</a></li>
                            <li><a href="#">课程管理</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                           <li>
                                <a href="" data-toggle="modal" data-target="#login">
                                <span class="glyphicon glyphicon-log-in"></span>
                                <span id="loginText/">登录</span>
                                </a>
                            </li>
                            
                            <li>
                            	<a href="" data-toggle="modal" data-target="#register">
                    			<span class="glyphicon glyphicon-user"></span>
                    			<span id="registText">注册</span>
                				</a>
                			</li>
                        </ul>
                    </div>    
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!-- 注册 -->
       	<div id="register" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-title">
                        <h1 class="text-center">注册</h1>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="<?php echo url('Login/register'); ?>" method="post">
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" name="username" type="text" placeholder="6-15位字母或数字">
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input class="form-control" name="password" type="password" placeholder="至少6位字母或数字">
                            </div>
                            <div class="form-group">
                                <label for="">再次输入密码</label>
                                <input class="form-control" name="passwd" type="password" placeholder="至少6位字母或数字">
                            </div>
                            <div class="form-group">
                                <label for="">真实姓名</label>
                                <input class="form-control" name="name" type="text" placeholder="必填">
                            </div>
                            <div class="form-group">
                                <label for="">邮箱</label>
                                <input class="form-control" name="mail" type="email" placeholder="例如:***@***.com">
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit" style="background-color: #3a8cd2b3;border: 0px solid transparent;">提交</button>
                                <button class="btn btn-danger" data-dismiss="modal" style="background-color: #fb5e5999;border: 0px solid transparent;">取消</button>
                            </div>
                            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">
                                <font style="font-size: 13px;">已有账号？点我登录</font>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 注册 end-->
        <!-- 登录 -->
        <div id="login" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-title">
                        <h1 class="text-center">登录</h1>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="<?php echo url('Login/login'); ?>" method="post">
                            <div class="form-group">
                                <label for="">用户名</label>
                                <input class="form-control" type="text" placeholder="" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="">密码</label>
                                <input class="form-control" type="password" placeholder="" name="password" id="password">
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit" style="background-color: #3a8cd2b3; border: 0px solid transparent;">登录</button>
                                <button class="btn btn-danger" data-dismiss="modal" style="background-color: #fb5e5999;border: 0px solid transparent;">取消</button>
                            </div>
                            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">
                                <font style="font-size: 13px;">还没有账号？点我注册</font>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- 预约 -->
    <div id="appoint" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-title">
                    <h1 class="text-center">预约</h1>
                </div>
                <div class="modal-body">
                    <form class="form-group" action="<?php echo url('appoint/appoint'); ?>" method="post">
                        <div class="form-group">
                            <label for="">活动id</label>
                            <input class="form-control" type="text" placeholder="" name="act_id" id="act_id" value=data-act>
                        </div>
                        <div class="form-group">
                            <label for="">专业</label>
                            <input class="form-control" type="text" placeholder="" name="professional" id="professional">
                        </div>
                        <div class="form-group">
                            <label for="">班级</label>
                            <input class="form-control" type="text" placeholder="" name="stu_class" id="stu_class">
                        </div>
                        <div class="form-group">
                            <label for="">姓名</label>
                            <input class="form-control" type="text" placeholder="" name="stu_name" id="stu_name">
                        </div>
                        <div class="form-group">
                            <label for="">学号</label>
                            <input class="form-control" type="text" placeholder="" name="student_num" id="student_num">
                        </div>
                        <div class="form-group">
                            <label for="">电话号码</label>
                            <input class="form-control" type="text" placeholder="" name="phone_num" id="phone_num">
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit" style="background-color: #3a8cd2b3;border: 0px solid transparent;">提交</button>
                            <button class="btn btn-danger" data-dismiss="modal" style="background-color: #fb5e5999;border: 0px solid transparent;">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 预约 end-->

    <!-- /搜索 -->
    <div class="row">
        <div class="col-md-12">
            
            <hr />
            <div class="row">
                <div class="col-md-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="name">姓名</label>
                            <input name="name" type="text" class="form-control" placeholder="教师姓名/学号..." value="<?php echo input( 'get.name'); ?>">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>教师姓名
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">学生学号
                                </label>
                            </div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>&nbsp;查询</button>
                            </div>
                    </form>
                </div>
            </div>
            <hr />     
        </div>
    </div>

    <!-- /活动显示 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-bordered">
                <tr class="info">
                    <th>序号</th>            
                    <th>活动ID</th>
                    <th>专业</th>
                    <th>班级</th>
                    <th>学生姓名</th>
                    <th>学号</th>
                    <th>状态</th>
                    
                </tr>
                
                <?php if(is_array($actives) || $actives instanceof \think\Collection || $actives instanceof \think\Paginator): $key = 0; $__LIST__ = $actives;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$active): $mod = ($key % 2 );++$key;?>
                <tr>
                    <td><?php echo $key; ?></td>
                    <td>
                        <a href="active?act_id=<?php echo $active->getData('act_id'); ?>"><?php echo $active->getData('act_id'); ?></a>
                        
                    </td>
                    <td><?php echo $active->getData('professional'); ?></td>
                    <td><?php echo $active->getData('stu_class'); ?></td>
                    <td><?php echo $active->getData('stu_name'); ?></td>
                    <td><?php echo $active->getData('student_num'); ?></td>
                    <td><?php echo $active->getData('status'); ?></td>
                    
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <?php echo $actives->render();; ?>
        </div>
    </div>


</body>

</html>
