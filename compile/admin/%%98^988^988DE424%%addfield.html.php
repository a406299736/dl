<?php /* Smarty version 2.6.28, created on 2015-01-21 21:33:41
         compiled from Module/addfield.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/field.js"></script>
</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=Index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Module&a=index">模型管理</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Field&a=index&mid=<?php echo $this->_tpl_vars['modData']['mid']; ?>
">字段管理【<?php echo $this->_tpl_vars['modData']['mname']; ?>
】</a></li>
	<li><span>&gt;</span></li>
	<li>增加字段</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Field&a=add" method="post" name="form1" onsubmit="return checkField();">
    	<table cellpadding="0" border="0" cellspacing="0">
            <tr>
            	<td align="right">字段名称：</td>
            	<td><input type="text" class="inputText" name="fname" id="fname" /> <span class="succ"><b>设置后不可修改</b> 由3-10字母、数字组成，并且仅能字母开头</span></td>
            </tr>
        	<tr>
            	<td width="12%" align="right">字段标识：</td>
            	<td width="88%"><input type="text" class="inputText" name="ftitle" id="ftitle" /> <span class="succ">例如：标题，表单显示 可以使用中文</span></td>
            </tr>
            <tr>
            	<td align="right">表单元素类型：</td>
            	<td><select name="ftype" id="ftype">
                	<option value="text">单行文本框</option>
                	<option value="pwd">密码框</option>
                    <option value="textarea">多行文本框</option>
                    <option value="editor">编辑器</option>
                    <option value="selects">下拉框</option>
                    <option value="checkbox">多选框</option>
                    <option value="radio">单选框</option>
                    <option value="image">图片</option>
                    <option value="moreimage">多图片</option>
                    <option value="file">文件</option>
                    <option value="morefile">多文件</option>
                    <option value="date">日期时间</option>
                </select> <span class="succ">设置后不可修改</span></td>
            </tr>
            <tr>
            	<td align="right">表单初始值：<br /><span class="hui" id="point"></span></td>
                <td><textarea class="textarea" name="defaults"></textarea></td>
            </tr>
            <tr>
            	<td align="right">表单是否必填：</td>
                <td><label for="ismust1"><input type="radio" id="ismust1" name="ismust" value="1" />是</label> <label for="ismust0"><input type="radio" name="ismust" id="ismust0" value="0" checked="checked" />否</label> <span class="succ">后台增加信息会验证是否必须填写</span></td>
            </tr>
            <tr>
            	<td align="right">排序：</td>
                <td><input type="text" name="sort" value="0" class="inputText" style="width:25px; text-align:center;" /> <span class="succ">值越大排序越前</span></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['modData']['mid']; ?>
" /><input type="submit" value="提交" name="addField" class="inputSub" id="addField" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>