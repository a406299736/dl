<?php /* Smarty version 2.6.28, created on 2014-11-26 12:02:46
         compiled from Template/temedit.html */ ?>
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
	<li><a href="?m=Template&a=index">模板管理</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Template&a=opendir&dir=<?php echo $this->_tpl_vars['dir']; ?>
">查看模板文件</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Template&a=editfile&dir=<?php echo $this->_tpl_vars['dir']; ?>
/<?php echo $this->_tpl_vars['filename']; ?>
">编辑模板文件</a></li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList">
        <table cellpadding="0" cellspacing="1" border="0">
        	<tr>
            	<th style="text-align:left; padding-left:2%;">文件名：<?php echo $this->_tpl_vars['filename']; ?>
</th>
            </tr>
        	<form method="post" action="?m=Template&a=editfile&dir=<?php echo $this->_tpl_vars['dir']; ?>
">
            <tr>
            	<td><textarea class="textarea" name="temcontent" style="width:96%; height:300px;"><?php echo $this->_tpl_vars['temcontent']; ?>
</textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" value="<?php echo $this->_tpl_vars['filename']; ?>
" name='filename' /><input type="submit" class="inputSub1" value="提交" name="settemcontent" /></td>
            </tr>
            </form>
        </table>
    </div>
</div>
</body>
</html>