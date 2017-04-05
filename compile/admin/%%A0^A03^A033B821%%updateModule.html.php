<?php /* Smarty version 2.6.28, created on 2016-04-12 09:27:41
         compiled from Module/updateModule.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/module.js"></script>

</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Module&a=index">模型管理</a></li>
    <li><span>&gt;</span></li>
	<li>修改【<?php echo $this->_tpl_vars['moduleData']['mname']; ?>
】模型</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Module&a=update" method="post" name="form1" onsubmit="return checkModule();">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
                <th colspan="2">基本设置</th>
            </tr>
        	<tr>
            	<td width="12%" align="right">模型名称：</td>
            	<td width="88%"><input type="text" class="inputText" value="<?php echo $this->_tpl_vars['moduleData']['mname']; ?>
" name="mname" id="mname" /> <span class="succ">中文名称 如：新闻模型</span></td>
            </tr>
        	<tr>
            	<td width="12%" align="right">数据表名称：</td>
            	<td width="88%"><input type="text" disabled="disabled" value="<?php echo $this->_tpl_vars['moduleData']['tab']; ?>
" class="inputText" name="tab" id="tab" /> <span class="succ">不可修改</span></td>
            </tr>
        	<tr>
            	<td width="12%" align="right">模型说明：</td>
            	<td width="88%"><input type="text" value="<?php echo $this->_tpl_vars['moduleData']['content']; ?>
" class="inputText" name="content" id="content" /> <span class="succ">模型说明</span></td>
            </tr>
            <tr>
            	<td>&nbsp;</td>
                <td><input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['moduleData']['mid']; ?>
" /><input type="submit" class="inputSub" name="updateModule" id="updateModule" value="提交" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>