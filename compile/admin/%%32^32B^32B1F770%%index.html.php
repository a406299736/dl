<?php /* Smarty version 2.6.28, created on 2017-03-25 17:06:05
         compiled from Caiji/index.html */ ?>
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
    <li>采集管理</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList" id="allcheckbox">
    <div class="mainHead"><a href="?m=Acquisi&a=add">+创建节点</a></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
            	<th width="10%">id</th>
                <th width="15%">节点名字</th>
                <th width="10%">所属模型</th>
                <th width="35%">备注</th>
                <th width="30%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['allmodule'][$this->_tpl_vars['v']['mid']]['mname']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['content']; ?>
</td>
                <td><a href="?m=Acquisi&a=update&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">修改</a><a href="?m=Acquisi&a=manage&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">管理节点</a><a href="?m=Acquisi&a=delete&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" onclick="return confirm('确定要删除此节点？将删除该节点所有相关数据');">删除</a></td>
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