<?php /* Smarty version 2.6.28, created on 2016-11-15 17:23:58
         compiled from Login/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录 - 网站管理系统</title>
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<link type="text/css" rel="stylesheet" href="template/admin/css/login.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/login.js"></script>
</head>
<body>
    <div class='loginBox'>
    	<div class="loginBox_l"><p></p></div>
    	<div class="loginBox_r">
        	<h1>管理员登录</h1>
            <form method="post" action="?m=login&a=login" onsubmit="return login();">
            <ul>
            	<li>用户名：<input type="text" class="inputText" name="name" id="name" /></li>
                <li>密　码：<input type="password" class="inputText" name="pwd" id="pwd" /></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="登录" class="inputSub1" /></li>
            </ul>
            </form>
        </div>
        <div class="fooLogin"><p>合肥久鑫网络科技有限公司 提供技术支持 官网：<a href="http://www.9-xin.com">www.9-xin.com</a></a></p></div>
    </div>
</body>
</html>