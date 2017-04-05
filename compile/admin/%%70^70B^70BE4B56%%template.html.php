<?php /* Smarty version 2.6.28, created on 2016-04-12 09:27:36
         compiled from Template/template.html */ ?>
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
</ul>
</div>
<div class="mainBox">
    <div class="mainList">
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
                <th width="60%">模板风格名称[目录名]</th>
                <th width="40%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['temList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td class="padding"><?php echo $this->_tpl_vars['v']; ?>
</td>
                <td><?php if ($this->_tpl_vars['default_tem'] == $this->_tpl_vars['v']): ?><a href="#" style="color:#f00;">已经是默认风格</a><?php else: ?><a href="?m=Template&a=changeTem&tem=<?php echo $this->_tpl_vars['v']; ?>
">设置为默认风格</a><?php endif; ?><a href="?m=Template&a=opendir&dir=<?php echo $this->_tpl_vars['v']; ?>
">查看模板文件</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
</div>
</body>
</html>