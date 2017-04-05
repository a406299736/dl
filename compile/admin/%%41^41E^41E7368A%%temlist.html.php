<?php /* Smarty version 2.6.28, created on 2016-05-28 23:06:01
         compiled from Template/temlist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'Template/temlist.html', 37, false),)), $this); ?>
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
</ul>
</div>
<div class="mainBox">
    <div class="mainList">
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
            	<th colspan="4"><div class="parent_dir"><?php if ($this->_tpl_vars['parent'] && $this->_tpl_vars['parent'] != '.'): ?><a href="?m=Template&a=opendir&dir=<?php echo $this->_tpl_vars['parent']; ?>
" class="parent">上级目录</a><?php endif; ?><?php $_from = $this->_tpl_vars['dirlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?><a href="?m=Template&a=opendir&dir=<?php echo $this->_tpl_vars['dir']; ?>
/<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</a><?php endforeach; endif; unset($_from); ?></div></th>
            </tr>
            <tr>
                <th width="40%">文件名</th>
                <th width="20%">更新时间</th>
                <th width="20%">文件大小</th>
                <th width="20%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['filelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td class="padding"><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['size']; ?>
</td>
                <td><?php if ($this->_tpl_vars['v']['type'] == 1): ?><a href='/<?php echo $this->_tpl_vars['v']['imagepath']; ?>
' target='_blank'>查看图片</a><?php else: ?><a href="?m=Template&a=editfile&dir=<?php echo $this->_tpl_vars['dir']; ?>
/<?php echo $this->_tpl_vars['v']['name']; ?>
">编辑</a><?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
</div>
</body>
</html>