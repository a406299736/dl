<?php /* Smarty version 2.6.28, created on 2017-03-25 17:06:06
         compiled from Sql/index.html */ ?>
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
	<li>执行sql语句</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Sql&a=sqlset" method="post" name="form1">
    	<table cellpadding="0" border="0" cellspacing="0">
            <tr>
            	<th colspan="2" style="font-weight:bold; font-weight:bold; font-size:14px; text-align:center;">请谨慎使用本功能，否则会导致数据库崩溃，表前缀使用[-pre-]</th>
            </tr>
            <tr>
            	<td align="right">SQL语句：</td>
                <td><textarea class="textarea" name="sqlstr"></textarea> <span class="succ">多条请用“;”分号隔开</span></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="submit" value="提交" name="sqlsub" class="inputSub" id="addInfo" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>