<?php /* Smarty version 2.6.28, created on 2015-01-19 20:28:52
         compiled from Slide/update.html */ ?>
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
	<li><a href="?m=Slide&a=index">焦点图管理</a></li>
	<li><span>&gt;</span></li>
	<li>修改焦点图</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?m=Slide&a=update" method="post" name="form1">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">焦点图名称：</td>
                <td width="88%"><input type="text" value="<?php echo $this->_tpl_vars['name']; ?>
" class="inputText" name="name" id="formname" /></td>
            </tr>
            <tr>
            	<td width="12%" align="right">焦点图说明：</td>
                <td width="88%"><textarea class="textarea" name="content"><?php echo $this->_tpl_vars['content']; ?>
</textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" /><input type="submit" value="提交" class="inputSub" name="updateSlide" id="addform" /></td>
            </tr>
       </table>
       </form>
    </div>
</div></body>
</html>