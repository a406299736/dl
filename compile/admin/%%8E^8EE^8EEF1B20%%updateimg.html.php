<?php /* Smarty version 2.6.28, created on 2014-11-26 16:15:08
         compiled from Slide/updateimg.html */ ?>
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
        <li><a href="?m=Slide&a=img&id=<?php echo $this->_tpl_vars['id']; ?>
">焦点图【<?php echo $this->_tpl_vars['slideData']['name']; ?>
】图片管理</a></li>
	<li><span>&gt;</span></li>
	<li>修改图片</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?m=Slide&a=updateimg" method="post" name="form1">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">上传图片：</td>
                <td width="88%"><input type="text" name="img" id="img" class="inputText inputWidth" value="<?php echo $this->_tpl_vars['img']['img']; ?>
" /> <input type="button" class="inputSub1" value="选择图片" onclick="selectUpload(1,'file/slide','img');" /></td>
            </tr>
            <tr>
                <td width="12%" align="right">链接地址</td>
                <td width="88%"><input class="inputText inputWidth" type="text" name="url" value="<?php echo $this->_tpl_vars['img']['url']; ?>
" /> <span class="succ">http://开头</span></td>
            </tr>
            <tr>
            	<td width="12%" align="right">图片说明：</td>
                <td width="88%"><textarea class="textarea" name="content"><?php echo $this->_tpl_vars['img']['content']; ?>
</textarea></td>
            </tr>
            <tr>
            	<td width="12%" align="right">排序：</td>
                <td width="88%"><input type="text" value="<?php echo $this->_tpl_vars['img']['sort']; ?>
" class="inputText" style="width:30px; text-align:center;" name="sort"> <span class="succ">值越大排序越前</span></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['img']['uid']; ?>
" /><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['img']['id']; ?>
" /><input type="submit" value="提交" class="inputSub" name="updateimg" id="addform" /></td>
            </tr>
       </table>
       </form>
    </div>
</div></body>
</html>