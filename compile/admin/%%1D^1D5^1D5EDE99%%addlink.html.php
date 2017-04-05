<?php /* Smarty version 2.6.28, created on 2015-01-28 10:22:25
         compiled from Link/addlink.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/link.js"></script>


</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Link&a=index">友情连接管理</a></li>
	<li><span>&gt;</span></li>
	<li>增加友情链接</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Link&a=add" method="post" name="form1" onsubmit="return check();">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">链接名称：</td>
            	<td width="88%"><input type="text" class="inputText inputWidth" name="name" id="name" /></td>
            </tr>
        	<tr>
            	<td align="right">链接地址：</td>
            	<td><input type="text" value="http://" class="inputText inputWidth" name="url" id="url" /> <span class="succ">请以 http:// 开头</span></td>
            </tr>
        	<tr>
            	<td align="right">图片：</td>
            	<td><input type="text" class="inputText inputWidth" name="img" id="img" /> <input type="button" class="inputSub1" onclick="selectUpload('1','file/link','img',0);" value="选择图片" /></td>
            </tr>
        	<tr>
            	<td align="right">备注：</td>
            	<td><textarea class="textarea" name="remarks"></textarea></td>
            </tr>
        	<tr>
            	<td align="right">排序：</td>
            	<td><input type="text" class="inputText" value="0" style="width:25px;" name="sort" id="sort" /> <span class="succ">值越大排序越前</span></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="inputSub" name="addLink" id="addLink" /></td>
            </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>