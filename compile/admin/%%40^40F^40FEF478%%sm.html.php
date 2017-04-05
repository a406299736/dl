<?php /* Smarty version 2.6.28, created on 2016-04-12 09:59:34
         compiled from Basic/sm.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>

</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
    <li><span>&gt;</span></li>
	<li><a href="?m=Basic&a=index">基本设置</a></li>
	<li><span>&gt;</span></li>
	<li>伪静态说明</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
    	<div class="static_sm">
            <h1>开启伪静态需要注意以下事项：</h1>
            <ul>
                <li>你的服务器或者空间必须支持“mod_rewrite”url重写功能。</li>
                <li>在网站根目录创建.htaccess文件或者服务器的配置文件中加入以下代码</li>
                <li><textarea class="textarea" style="height:100px;">&lt;IfModule mod_rewrite.c&gt;
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
&lt;/IfModule&gt;</textarea></li>
                <li>如果闲麻烦，可以直接在网站根目录/file/htaccess.rar把该解压文件解压到网站根目录也可以</li>
                <li><input type="button" class="inputSub1" onclick="window.location.href='<?php echo $this->_tpl_vars['backurl']; ?>
'" value="点击这里返回" /></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>