<?php /* Smarty version 2.6.28, created on 2016-04-12 09:53:45
         compiled from Cache/index.html */ ?>
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
	<li>更新缓存</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm schtml" id="mainForm">
        <form action="?&m=Cache&a=index" method="post">
        <input type="hidden" name="cache" value="1" />
        <table cellpadding="0" cellspacing="0" border="0">
        	<tr>
            	<th>全站相关</th>
            </tr>
        	<tr>
            	<td><input type="submit" name="all" value="更新全站缓存" class="inputSub1" /> <span class="succ">比较耗费资源</span></td>
            </tr>
            <tr>
            	<th>栏目相关</th>
            </tr>
            <tr>
            	<td><input type="submit" name="allclass" value="全部栏目缓存" class="inputSub1" /></td>
            </tr>
            <tr>
            	<th>模型相关</th>
            </tr>
            <tr>
            	<td><input type="submit" name="allmod" value="全部模型缓存" class="inputSub1" />&nbsp;&nbsp;<input type="submit" name="modform" value="模型表单" class="inputSub1" />&nbsp;&nbsp;<input type="submit" name="modfield" value="模型字段" class="inputSub1" /></td>
            </tr>
            <tr>
            	<th>信息相关</th>
            </tr>
            <tr>
            	<td><input type="submit" name="ztnum" value="更新全部专题信息数量" class="inputSub1" /> <input type="button" onclick="window.location.href='?m=Tags&a=updateAllNum'" value="更新全部Tags信息数量" class="inputSub1" /></td>
            </tr>
        	<tr>
            	<th>广告相关</th>
            </tr>
        	<tr>
            	<td><input type="submit" name="ad" value="全站广告缓存" class="inputSub1" /></td>
            </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>