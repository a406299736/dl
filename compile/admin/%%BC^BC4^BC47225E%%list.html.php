<?php /* Smarty version 2.6.28, created on 2014-11-26 11:58:28
         compiled from Caiji/list.html */ ?>
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
    <li><a href="?m=Acquisi&a=index">节点管理</a></li>
	<li><span>&gt;</span></li>
    <li>采集【<?php echo $this->_tpl_vars['jdData']['name']; ?>
】管理</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList" id="allcheckbox">
    <div class="mainHead"><a href="?m=Acquisi&a=addCaiji&id=<?php echo $this->_tpl_vars['jdData']['id']; ?>
">+创建采集</a></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
            	<th width="10%">id</th>
                <th width="15%">采集名字</th>
                <th width="10%">所属节点</th>
                <th width="25%">备注</th>
                <th width="40%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['v']['lid']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['lname']; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['jdData']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['lcontent']; ?>
</td>
                <td><a href="?m=Acquisi&a=startCaiji&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
&uid=<?php echo $this->_tpl_vars['jdData']['id']; ?>
" target="_blank">开始采集</a><a href="?m=Acquisi&a=testcj&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
">采集测试</a><a href="?m=Acquisi&a=caijiDataList&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
">查看数据</a><a href="?m=Acquisi&a=updateCaiji&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
&id=<?php echo $this->_tpl_vars['v']['uid']; ?>
">修改</a><a href="?m=Acquisi&a=deleteRegular&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
" onclick="return confirm('确定要删除此采集？将删除该采集所有相关数据');">删除</a><a href="?m=Acquisi&a=delete_list_url&lid=<?php echo $this->_tpl_vars['v']['lid']; ?>
" onclick="return confirm('确定要删除该采集网址库？可能会导致重复采集');">清空已采集网址库</a></td>
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