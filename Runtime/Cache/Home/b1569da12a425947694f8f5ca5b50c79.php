<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="format-detection" content="telephone=no" >

        <title>login登录</title>
    <link rel="stylesheet" type="text/css" href="/static/li/li-1.2.0.css">
</head>
<body>
<form  name="myForm" action="/tp/index.php/home/login/login"   onsubmit="return validateForm()" method="post" >
用户名:<input type="text" name="name"><br/>
  密码:<input type="password" name="password"><br/>
       <input type="submit" value="提交">
</form>
<header></header>
<article></article>
<footer></footer>
</body>
<script type="text/html" id="registerMainTpl">

</script>
<!-- Mainly scripts -->
<script src="/tp/Public/Hom/js/jquery-2.1.1.js"></script>
<script src="/tp/Public/Hom/js/bootstrap.min.js"></script>
<script src="/tp/Public/Hom/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/tp/Public/Hom/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!--  <script src="js/plugins/jeditable/jquery.jeditable.js"></script>  -->
<script src="/tp/Public/Hom/js/plugins/dataTables/datatables.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/tp/Public/Hom/js/inspinia.js"></script>
<script src="/tp/Public/Hom/js/plugins/pace/pace.min.js"></script>
<script type="text/javascript">
                function validateForm()
//                {
//                    var x=document.forms["myForm"]["name"].value;
//                    if (x==null || x=="")
//                    {
//                        alert("账户必须填写");
//                        return false;
//                    }
//                    var x=document.forms["myForm"]["password"].value;
//                    if (x==null || x=="")
//                    {
//                        alert("密码不能为空");
//                        return false;
//                    }
//
//    }
</script>
</html>