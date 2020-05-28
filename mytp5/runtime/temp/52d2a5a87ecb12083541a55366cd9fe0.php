<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\phpstudy\PHPTutorial\WWW\mytp5\public/../application/index\view\teacher\add.html";i:1589543085;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>教师页面</title>
    <link rel="stylesheet" type="text/css" href="/tp5/public/static/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/moment.js/2.24.0/moment-with-locales.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
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
                            <li class="active"><a href="<?php echo url('index'); ?>">活动管理</a></li>
                            <li><a href="<?php echo url('Teacher/information'); ?>">完善信息</a></li>
                            <li><a href="#">班级管理</a></li>
                            <li><a href="#">课程管理</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">欢迎<?php echo session('teacherUsername'); ?></a></li>
                            <li><a href="<?php echo url('teacher/logOUt'); ?>">注销</a></li>
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

    <form class="form-horizontal" method="get">
        <div class="form-group">
            <!--<h2 class="form-signin-heading">注册</h2>-->
            <!-- class="sr-only"将label标签隐藏 -->
            <center> <p><?php echo $tip; ?></p> </center>
            <label for="exampleInputUsername1" class="col-sm-2 control-label inline-style font-position-right">专业</label>
            <div class="col-sm-9 inline-style ">
                <input type="text" class="form-control" name="major" id="major" placeholder="专业">
            </div>
        </div>
        <div class="form-group">
            <!--<h2 class="form-signin-heading">注册</h2>-->
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">开始时间</label>
            <div class='input-group date'  id='datetimepicker1' style="padding: 0px 80px 0px 15px">
                <input type='text' class="form-control" name='starttime'/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">结束时间</label>
            <div class='input-group date'  id='datetimepicker2' style="padding: 0px 80px 0px 15px">
                <input type='text' class="form-control" name='endtime'/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label   inline-style font-position-right">活动地址</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" name="addr" id="addr" placeholder="M楼">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">限制人数</label>
            <div class="col-sm-9  inline-style">
                <input type="text" class="form-control" name="nums" id="nums" placeholder="100">
            </div>
            <div class="form-group">
            </div>
        </div>
        
        <div class="form-group text-left">
            <div class="col-sm-offset-2 col-sm-10">               
                <button class="btn btn-sm btn-primary register-btn" type="submit">确认添加</button>
            </div>
        </div>
    </form>
    </div>



</div>

</body>

<script type="text/javascript">
$(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD hh:mm',
        locale: moment.locale('zh-cn')
    });
    $('#datetimepicker2').datetimepicker({
        format: 'YYYY-MM-DD hh:mm',
        locale: moment.locale('zh-cn')
    });
});
</script>

</html>
