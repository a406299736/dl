<?php /* Smarty version 2.6.28, created on 2015-01-21 21:47:15
         compiled from Form/addform.html */ ?>
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
	<li>增加表单</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?m=Form&a=add" method="post" name="form1" onsubmit="return Fromcheck();">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td width="12%" align="right">表单名称：</td>
            	<td width="88%"><input type="text" class="inputText" name="formname" id="formname" /></td>
            </tr>
            <tr>
            	<td align="right">选择字段：</td>
                <td>
                	<table cellpadding="0" cellspacing="1" border="0" class="fieldTable">
                    	<tr>
                        	<th>字段标识</th>
                        	<th>字段名字</th>
                        	<th>输入项</th>
                        	<th>必填项</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <tr>
                        	<td><?php echo $this->_tpl_vars['v']['fieldtitle']; ?>
</td>
                        	<td><?php echo $this->_tpl_vars['v']['fieldname']; ?>
</td>
                        	<td><input type="checkbox" name="fieldid[]" value="<?php echo $this->_tpl_vars['v']['fid']; ?>
" /></td>
                        	<td><input type="checkbox" name="must[]" value="<?php echo $this->_tpl_vars['v']['fieldname']; ?>
" /></td>
                        </tr>
                        <?php endforeach; endif; unset($_from); ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="提交" class="inputSub" name="addform" id="addform" /></td>
            </tr>
            <tr>
            	<td>&nbsp;</td>
                <td><span class="succ">注意：至少选择一个“必填项”，否则前台提交可能会出现空数据</span></td>
            </tr>
       </table>
       </form>
    </div>
</div></body>
</html>