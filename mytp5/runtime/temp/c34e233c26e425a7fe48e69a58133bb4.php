<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\phpstudy2\PHPTutorial\WWW\mytp5\public/../application/index\view\teacher\information.html";i:1589211148;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>教师页面</title>
    <link rel="stylesheet" type="text/css" href="/tp5/public/static/bootstrap-3.4.1-dist/css/bootstrap.min.css">
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
                            <li class="active"><a href="http://127.0.0.1/mytp5/public/index/teacher/index">活动管理</a></li>
                            <li><a href="#">完善信息</a></li>
                            <li><a href="#">班级管理</a></li>
                            <li><a href="#">课程管理</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">欢迎</a></li>
                            <li><a href="#">注销</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    <!-- /菜单导航 -->

    <div class="row">
        <div class="col-md-12">
            
            <hr />
            <div class="row">
                <div class="col-md-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="name">姓名</label>
                            <input name="name" type="text" class="form-control" placeholder="姓名..." value=<?php echo input( 'get.name'); ?>>
                        </div>
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>&nbsp;查询</button>
                    </form>
                </div>
                <div class="col-md-4 text-right">
                    <a href="<?php echo url('add'); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;增加</a>
                </div>
            </div>
            <hr />     
        </div>
    </div>

    <!-- /增加活动信息 -->
    <div class="container1" style="padding: 0px 300px 20px 30px">

    <form class="form-horizontal">
        <div class="form-group">
            <!--<h2 class="form-signin-heading">注册</h2>-->
            <!-- class="sr-only"将label标签隐藏 -->
            <label for="exampleInputUsername1" class="col-sm-2 control-label inline-style font-position-right">用户名</label>
            <div class="col-sm-9 inline-style ">
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="用户名">
            </div>
        </div>
        <div class="form-group">
            <!--<h2 class="form-signin-heading">注册</h2>-->
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">性别</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="性别">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">年龄</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="年龄">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label   inline-style font-position-right">手机</label>
            <div class="col-sm-9  inline-style">
                <input type="tel" class="form-control" id="exampleInputPhone1" placeholder="手机">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label   inline-style font-position-right">邮箱</label>
            <div class="col-sm-9  inline-style">
                <input type="mail" class="form-control" id="exampleInputPhone1" placeholder="手机">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label   inline-style font-position-right">地址</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" id="exampleInputPhone1" placeholder="地址">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label   inline-style font-position-right">专业</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" id="exampleInputPhone1" placeholder="专业">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-lg btn-primary register-btn" type="submit">确认修改</button>
            </div>
        </div>
    </form>
    </div>


</body>

</html>
