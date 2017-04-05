<?php /* Smarty version 2.6.28, created on 2015-01-18 12:29:38
         compiled from Manage/log.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'Manage/log.html', 33, false),)), $this); ?>
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
	<li>管理员登录日志</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList">
        <h1 class="slideSub"><a href="?m=Manage&a=index">管理</a><a class="curr" href="?m=Manage&a=log">登录日志</a></h1>
        <div class="mainHead"><a href="?m=Manage&a=deleteLog" onclick="return confirm('确定要清理吗？')">-删除日志（只保留七天内）</a></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
                <th>用户名</th>
                <th>登录时间</th>
                <th>登录ip</th>
            </tr>
            <?php $_from = $this->_tpl_vars['userLog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['ip']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
    </div>
</div>
</body>
</html>