<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\phpstudy\PHPTutorial\WWW\mytp5\public/../application/index\view\login\index.html";i:1589556351;}*/ ?>
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

<body>
    <form action="<?php echo url('Login/index'); ?>" method="post">
        


        <label for="name">默认的复选框和单选按钮的实例</label>
            
        <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> 选项 1
        </label>
        </div>
        <div class="radio">
    <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">选项 2 - 选择它将会取消选择选项 1
    </label>
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>&nbsp;查询</button>
    </form>



</body>