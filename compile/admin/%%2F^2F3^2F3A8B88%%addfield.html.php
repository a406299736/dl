<?php /* Smarty version 2.6.28, created on 2015-01-21 21:49:14
         compiled from Form/addfield.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/form.js"></script>


</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Form&a=field">表单字段管理</a></li>
	<li><span>&gt;</span></li>
	<li>增加字段</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?m=Form&a=addField" method="post" name="form1" onsubmit="return Fieldcheck();">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">字段名字：</td>
            	<td width="88%"><input type="text" class="inputText" name="fieldname" id="fieldname" /> <span class="succ">由3-8个字母、数字组成且必须以字母开头</span></td>
            </tr>
        	<tr>
            	<td width="12%" align="right">字段标识：</td>
            	<td width="88%"><input type="text" class="inputText" name="fieldtitle" id="fieldtitle" /> <span class="succ">可以使用中文 如：姓名</span></td>
            </tr>
            <tr>
            	<td align="right">表单类型：</td>
                <td>
                	<select name="fieldtype" id="fieldtype">
                    	<option value="text">单行文本框</option>
                    	<option value="textarea">多行文本框</option>
                    	<option value="select">下拉框</option>
                    	<option value="checkbox">多选框</option>
                    	<option value="radio">单选框</option>
                        <option value="file">文件</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="inputSub" name="addField" id="addField" /></td>
            </tr>
       </table>
       </form>
    </div>
</div></body>
</html>