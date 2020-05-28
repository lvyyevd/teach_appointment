<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\phpstudy2\PHPTutorial\WWW\mytp5\public/../application/index\view\teacher\appoint_show.html";i:1589441537;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <title>预约情况</title>
    <link rel="stylesheet" type="text/css" href="/mytp5/public/static/bootstrap-3.4.1-dist/css/bootstrap.min.css">
</head>

<body class="container">

<!-- 菜单导航 -->
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://127.0.0.1/mytp5/public/index/index">网站首页</a>
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
                        <li><a href="#">欢迎 <?php echo session('teacherId'); ?></a></li>
                        <li><a href="logOut">注销</a></li>
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
        </div>
        <hr />     
    </div>
</div>

<!-- /活动信息 -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered">
            <tr class="info">
                <th>序号</th>
                <th>活动ID</th>
                <th>学生姓名</th>
                <th>学生学号</th>
                <th>学生专业</th>
                <th>学生电话</th>
                <th>审核状态</th>
                <th>操作</th>
            </tr>

            <?php if(is_array($appoint) || $appoint instanceof \think\Collection || $appoint instanceof \think\Paginator): $key = 0; $__LIST__ = $appoint;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$appoint): $mod = ($key % 2 );++$key;?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $appoint->getData('act_id'); ?></td>
                <td><?php echo $appoint->getData('stu_name'); ?></td>
                <td><?php echo $appoint->getData('student_num'); ?></td>
                <td><?php echo $appoint->getData('professional'); ?></td>
                <td><?php echo $appoint->getData('phone_num'); ?></td>
                <td><?php echo $appoint->getData('status'); ?></td>
                <td>
                    <a href="audit?status=1&act_id=<?php echo $appoint->getData('act_id'); ?>">同意</a>
                    <a href="audit?status=0&act_id=<?php echo $appoint->getData('act_id'); ?>">不同意</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </table>
    </div>
</div>




</body>

</html>
