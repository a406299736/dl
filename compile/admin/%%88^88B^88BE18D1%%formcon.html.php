<?php /* Smarty version 2.6.28, created on 2016-11-15 22:18:13
         compiled from Form/formcon.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'Form/formcon.html', 43, false),)), $this); ?>
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
	<li><a href="?m=Form&a=index">表单管理</a></li>
	<li><span>&gt;</span></li>
	<li>查看内容</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList column">
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
                <th width="5%">信息ID</th>
                <th width="60%">信息集合</th>
                <th width="10%">发布者IP</th>
                <th width="15%">发布时间</th>
                <th width="10%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['v']['cid']; ?>
</td>
                <td class="padding"><ul class="table_ul">
                	<?php $_from = $this->_tpl_vars['v']['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                    <li><?php echo $this->_tpl_vars['fieldArr'][$this->_tpl_vars['k']]; ?>
：<?php echo $this->_tpl_vars['i']; ?>
</li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul></td>
                <td><?php echo $this->_tpl_vars['v']['ip']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
                <td><a href="?m=Form&a=deleteCon&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
&id=<?php echo $this->_tpl_vars['id']; ?>
" onclick="return confirm('确定要删除吗？');">删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
    <div class="page">共 <?php echo $this->_tpl_vars['num']; ?>
 条 <?php echo $this->_tpl_vars['page']; ?>
</div>
</div>
</body>
</html>