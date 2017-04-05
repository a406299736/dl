<?php /* Smarty version 2.6.28, created on 2015-01-21 19:30:28
         compiled from Module/field.html */ ?>
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
	<li><a href="?m=Module&a=index">模型管理</a></li>
	<li><span>&gt;</span></li>
	<li>字段管理【<?php echo $this->_tpl_vars['modData']['mname']; ?>
】</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList column">
    	<div class="mainHead"><a href="?m=Field&a=add&mid=<?php echo $this->_tpl_vars['modData']['mid']; ?>
">+添加字段</a></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
                <th width="5%">排序</th>
                <th width="5%">字段ID</th>
                <th width="15%">字段标识</th>
                <th width="15%">字段名称</th>
                <th width="15%">字段类型</th>
                <th width="5%">必填</th>
                <th width="5%">系统字段</th>
                <th width="35%">操作</th>
            </tr>
            <tr>
            	<td>0</td>
            	<td>无</td>
            	<td>标题</td>
            	<td>title</td>
            	<td>单行文本框</td>
            	<td><span class="hong">√<span></td>
            	<td><span class="hong">是</span></td>
            	<td>禁止任何操作</td>
            </tr>
            <tr>
            	<td>0</td>
            	<td>无</td>
            	<td>关键词</td>
            	<td>keywords</td>
            	<td>单行文本框</td>
            	<td>x</td>
            	<td><span class="hong">是</span></td>
            	<td>禁止任何操作</td>
            </tr>
            <tr>
            	<td>0</td>
            	<td>无</td>
            	<td>网页描述</td>
            	<td>description</td>
            	<td>多行文本框</td>
            	<td>x</td>
            	<td><span class="hong">是</span></td>
            	<td>禁止任何操作</td>
            </tr>
            <tr>
            	<td>0</td>
            	<td>无</td>
            	<td>发布时间</td>
            	<td>time</td>
            	<td>时间和日期</td>
            	<td><span class="hong">√<span></td>
            	<td><span class="hong">是</span></td>
            	<td>禁止任何操作</td>
            </tr>
            <form method="post" action="?m=Field&a=sortField">
            <?php $_from = $this->_tpl_vars['fieldData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
                <td><input type="text" class="inputText" style="width:25px; text-align:center" name="sort[]" value="<?php echo $this->_tpl_vars['v']['sort']; ?>
" /><input type="hidden" value="<?php echo $this->_tpl_vars['v']['fid']; ?>
" name="fid[]" /></td>
                <td><?php echo $this->_tpl_vars['v']['fid']; ?>
</a></td>
                <td><?php echo $this->_tpl_vars['v']['ftitle']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['fname']; ?>
</td>
                <td><?php echo $this->_tpl_vars['v']['ftype']; ?>
</td>
                <td><?php if ($this->_tpl_vars['v']['ismust']): ?><span class="hong">√</span><?php else: ?>x<?php endif; ?></td>
                <td>否</td>
                <td><a href="?m=Field&a=update&fid=<?php echo $this->_tpl_vars['v']['fid']; ?>
&mid=<?php echo $this->_tpl_vars['modData']['mid']; ?>
">修改</a><a href="?m=Field&a=del&fid=<?php echo $this->_tpl_vars['v']['fid']; ?>
&mid=<?php echo $this->_tpl_vars['modData']['mid']; ?>
" onclick="return confirm('确定要删除此字段？');">删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr>
            	<td width="5%"></td>
                <td width="95%" colspan="7" class="padding"><input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['modData']['mid']; ?>
" /><input type="submit" value="更新排序" class="inputSub1" name="sortSub" /> <span class="hui">值越大排序越前</span></td>
            </tr>
            </form>
        </table>
    </div>
</div>
</body>
</html>