<?php /* Smarty version 2.6.28, created on 2014-11-26 16:21:35
         compiled from Ad/addad.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/cal.js"></script>
<script type="text/javascript" src="template/admin/js/ad.js"></script>


</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Ad&a=index">广告管理</a></li>
	<li><span>&gt;</span></li>
	<li>增加广告</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Ad&a=add" method="post" name="form1" onsubmit="return check();">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">广告名称：</td>
            	<td width="88%"><input type="text" class="inputText" name="name" id="name" /></td>
            </tr>
        	<tr>
            	<td align="right">广告类型：</td>
            	<td><select name="type" id="type">
                    <option value=0>图片</option>
                    <option value=1>文字</option>
                    <option value=2>html代码</option>
                </select></td>
            </tr>
            <tr>
            	<td width="12%" align="right">到期时间：</td>
            	<td width="88%"><input type="text" class="inputText" name="extime" id="extime" /></td>
            </tr>
       </table>
       <table cellpadding="0" cellspacing="0" border="0" id="ad0" class="ad">
       		<tr>
            	<td width="12%" align="right">图片：</td>
            	<td width="88%"><input type="text" class="inputText inputWidth" name="img" id="img" /> <input type="button" class="inputSub1" value="选择图片" onclick="selectUpload('1','file/ad','img');" /></td>
            </tr>
            <tr>
            	<td align="right">链接地址：</td>
                <td><input type="text" name="http" class="inputText inputWidth" value="http://" /> <span class="succ">http://开头</span></td>
            </tr>
            <tr>
            	<td align="right">属性：</td>
                <td>宽度：<input type="text" name="width" class="inputText" style="width:50px;" id="width" /> 高度：<input type="text" name="height" id="height" class="inputText" style="width:50px;"/></td>
            </tr>
       </table>
       <table cellpadding="0" cellspacing="0" border="0" id="ad1" class="ad">
       		<tr>
            	<td width="12%" align="right">文字：</td>
            	<td width="88%"><textarea class="textarea" name="string"></textarea><br /><span class="succ">每行一组 用井号 “#####” 隔开文字与链接地址 例：（lmxcms系统#####http://www.lmxcms.com）</span></td>
            </tr>
       </table>
       <table cellpadding="0" cellspacing="0" border="0" id="ad2" class="ad">
       		<tr>
            	<td width="12%" align="right">html代码：</td>
            	<td width="88%"><textarea class="textarea" name="html"></textarea></td>
            </tr>
       </table>
       <table cellpadding="0" border="0" cellspacing="0">
       		<tr>
            	<td width="12%" align="right">到期显示：</td>
                <td width="88%"><textarea class="textarea" name="exstr"></textarea></td>
            </tr>
       		<tr>
            	<td width="12%" align="right">备注：</td>
                <td width="88%"><textarea class="textarea" name="remarks"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="inputSub" name="addad" id="addad" /></td>
            </tr>
       </table>
       </form>
    </div>
</div>
</body>
</html>