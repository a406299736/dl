<?php /* Smarty version 2.6.28, created on 2016-05-28 23:14:58
         compiled from Slide/img.html */ ?>
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
	<li>焦点图【<?php echo $this->_tpl_vars['slideData']['name']; ?>
】图片管理</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList column">
        <div class="mainHead"><a href="?m=Slide&a=addimg&id=<?php echo $this->_tpl_vars['id']; ?>
">+增加图片</a></div>
        <form action="?m=Slide&a=sortimg" method="post">
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
                <th width="5%">排序</th>
                <th width="5%">图片ID</th>
                <th width="50%">图片预览</th>
                <th width="25%">说明</th>
                <th width="15%">操作</th>
            </tr>
            <?php $_from = $this->_tpl_vars['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><input type="text" class="inputText" style="width:25px; text-align:center" name="sort[]" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
"><input type="hidden" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name="id[]"></td>
                <td><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
                <td style=" text-align:center; padding:5px;"><a href="<?php echo $this->_tpl_vars['v']['img']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['v']['img']; ?>
" height="70" /></a></td>
                <td><?php echo $this->_tpl_vars['v']['content']; ?>
</td>
                <td><a href="?m=Slide&a=updateImg&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">修改</a><a href="?m=Slide&a=deleteImg&uid=<?php echo $this->_tpl_vars['v']['uid']; ?>
&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" onclick="return confirm('确定要删除吗？');">删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr class="">
            	<td width="5%"></td>
                <td width="95%" colspan="4" class="padding"><input type="submit" value="更新排序" class="inputSub1" name="sortSub"> <span class="hui">值越大排序越前</span></td>
            </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>