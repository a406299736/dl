<?php /* Smarty version 2.6.28, created on 2014-11-26 11:57:59
         compiled from Caiji/add.html */ ?>
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
	<li><a href="?m=Acquisi&a=index">采集管理</a></li>
	<li><span>&gt;</span></li>
	<li>创建节点</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Acquisi&a=add" method="post" name="form1">
    	<table cellpadding="0" border="0" cellspacing="0">
            <tr>
            	<td align="right" width="12%">节点名字：</td>
            	<td width="88%"><input type="text" class="inputText inputWidth" name="name" id="name" /></td>
            </tr>
            <tr>
            	<td align="right">选择模型：</td>
                <td><select name="mid" id="mid">
                <?php $_from = $this->_tpl_vars['allmodule']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']['mid']; ?>
"><?php echo $this->_tpl_vars['v']['mname']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select> <span class="succ">选择后不能修改</span></td>
            </tr>
            <tr>
            	<td align="right">备注</td>
                <td><textarea class="textarea" name="content"></textarea></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="hidden" name="backurl" value="<?php echo $this->_tpl_vars['backurl']; ?>
" /><input type="submit" value="提交" name="add" class="inputSub" id="add" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>