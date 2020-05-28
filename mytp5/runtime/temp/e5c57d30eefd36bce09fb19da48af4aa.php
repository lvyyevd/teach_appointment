<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpstudy2\PHPTutorial\WWW\mytp5\public/../application/index\view\login\index.html";i:1589175346;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>datetimpicker测试</title>
    <!--图标样式-->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/moment.js/2.24.0/moment-with-locales.js"></script>
   <script src="https://cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>


<body>
<div class="row">
<div class='col-sm-6'>

        <div class="form-group">

            <label>选择日期：</label>

            <!--指定 date标记-->

            <div class='input-group date' id='datetimepicker1'>

                <input type='text' class="form-control" />

                <span class="input-group-addon">

                    <span class="glyphicon glyphicon-calendar"></span>

                </span>

            </div>

        </div>

    </div>

    <div class='col-sm-6'>
        <div class="form-group">
            <label>选择日期+时间：</label>
            <!--指定 date标记-->
            <div class='input-group date' id='datetimepicker2'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>


    <form class="form-horizontal">
        <div class="form-group">
            <!--<h2 class="form-signin-heading">注册</h2>-->
            <!-- class="sr-only"将label标签隐藏 -->
            <label for="exampleInputUsername1" class="col-sm-2 control-label inline-style font-position-right">专业</label>
            <div class="col-sm-9 inline-style ">
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="用户名">
            </div>
        </div>
       
        <div class="form-group">
            <label for="exampleInputUsername1" class="col-sm-2 control-label  inline-style font-position-right">结束时间</label>
            <div class='input-group date inline-style' id='datetimepicker2'>
                <input type='text' class="form-control" />
            </div>
        </div>
        
        
        <div class="form-group text-left">
            <div class="col-sm-offset-2 col-sm-10">               
                <button class="btn btn-sm btn-primary register-btn" type="submit">确认添加</button>
            </div>
        </div>
    </form>


</div>



<script type="text/javascript">
$(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD',
        locale: moment.locale('zh-cn')
    });
    $('#datetimepicker2').datetimepicker({
        format: 'YYYY-MM-DD hh:mm',
        locale: moment.locale('zh-cn')
    });
});
</script>
</html>