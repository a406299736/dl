<?php /* Smarty version 2.6.28, created on 2016-11-15 18:58:17
         compiled from Zt/index.html */ ?>
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
    <?php if ($this->_tpl_vars['name']): ?>
    <li><a href="?m=Zt&a=index">专题管理</a></li>
	<li><span>&gt;</span></li>
	<li>专题搜索</li>
    <?php else: ?>
    <li>专题管理</li>
    <?php endif; ?>
</ul>
</div>
<div class="mainBox">
    <div class="mainList" id="allcheckbox">
    <div class="contentListSearchBox"><form method="get" class="right_form" action=""><p>搜索专题：<input type="text" class="inputText inputText1" name="name" placeholder="输入专题名字" value='<?php echo $this->_tpl_vars['name']; ?>
' />
        <input type="hidden" name="m" value="Zt" />
        <input type="hidden" name="a" value="search" />
        <input type="submit" name="searchSub" class="inputSub1" value="搜索" />
        </p></form></div>
    <div class="mainHead"><a href="?m=Zt&a=add">+添加专题</a>&nbsp;&nbsp;<a href="?m=Zt&a=updateAllNum">+更新全部专题信息数量</a> <span class="hui">操作专题信息后更新 主要应用于前后台显示专题信息数量</span></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
            	<th width="5%">选择</th>
                <th width="5%">排序</th>
                <th width="5%">专题ID</th>
                <th width="35%">专题名称</th>
                <th width="15%">路径</th>
                <th width="10%">信息数量</th>
                <th width="25%">操作</th>
            </tr>
            <form method="post" action="?m=Zt&a=manageZt">
            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
            	<td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name="id[]" /></td>
                <td><input type="text" class="inputText" style="width:25px; text-align:center" name="sort[]" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" /><input type="hidden" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name="sortid[]" /></td>
                <td><?php echo $this->_tpl_vars['v']['id']; ?>
</a></td>
                <td class="padding"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['v']['path']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
                <td><a href="?m=Zt&a=updateOneNum&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">更新信息数量</a><a href="?m=Zt&a=info&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">所属信息</a><a href="?m=Schtml&a=getUrlZt&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">生成</a><a href="?m=Zt&a=update&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">修改</a><a href="?m=Zt&a=delete&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" onclick="return confirm('确定要删除此此专题？');">删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr>
            	<td width="5%"><input type="checkbox" class="allcheckbox" /></td>
                <td width="95%" colspan="6" class="padding">
                <input type="submit" value="删除" onclick="return confirm('确定要删除这些专题？');" class="inputSub1" name="deleteMore" /> <input type="submit" name="updateChangeNum" value="更新专题信息数" class="inputSub1" /> <input type="submit" value="更新排序" class="inputSub1" name="sortSub" /> <span class="hui">值越大排序越前</span>
                </td>
            </tr>
            </form>
        </table>
    </div>
    <div class="page">共 <?php echo $this->_tpl_vars['num']; ?>
 条 <?php echo $this->_tpl_vars['page']; ?>
</div>
</div>
</body>
</html>