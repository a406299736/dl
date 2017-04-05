<?php /* Smarty version 2.6.28, created on 2015-01-21 20:06:26
         compiled from Module/updatefield.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/field.js"></script>
</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=Index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Module&a=index">模型管理</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Field&a=index&mid=<?php echo $this->_tpl_vars['modData']['mid']; ?>
">字段管理【<?php echo $this->_tpl_vars['modData']['mname']; ?>
】</a></li>
	<li><span>&gt;</span></li>
	<li>修改字段</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Field&a=update" method="post" name="form1" onsubmit="return checkField();">
    	<table cellpadding="0" border="0" cellspacing="0">
            <tr>
            	<td align="right">字段名称：</td>
            	<td><input type="text" disabled="disabled" class="inputText" name="fname" id="fname" value="<?php echo $this->_tpl_vars['fieldData']['fname']; ?>
" /> <span class="succ">不可修改</span></td>
            </tr>
        	<tr>
            	<td width="12%" align="right">字段标识：</td>
            	<td width="88%"><input type="text" class="inputText" name="ftitle" id="ftitle" value="<?php echo $this->_tpl_vars['fieldData']['ftitle']; ?>
" /> <span class="succ">例如：标题，表单显示 可以使用中文</span></td>
            </tr>
            <tr>
            	<td align="right">表单元素类型：</td>
            	<td><select name="ftype" id="ftype" disabled="disabled">
                	<option value="text"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'text'): ?> selected<?php endif; ?>>单行文本框</option>
                	<option value="pwd"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'pwd'): ?> selected<?php endif; ?>>密码框</option>
                    <option value="textarea"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'textarea'): ?> selected<?php endif; ?>>多行文本框</option>
                    <option value="editor"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'editor'): ?> selected<?php endif; ?>>编辑器</option>
                    <option value="select"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'select'): ?> selected<?php endif; ?>>下拉框</option>
                    <option value="checkbox"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'checkbox'): ?> selected<?php endif; ?>>多选框</option>
                    <option value="radio"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'radio'): ?> selected<?php endif; ?>>单选框</option>
                    <option value="image"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'image'): ?> selected<?php endif; ?>>图片</option>
                    <option value="moreimage"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'moreimage'): ?> selected<?php endif; ?>>多图片</option>
                    <option value="file"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'file'): ?> selected<?php endif; ?>>文件</option>
                    <option value="morefile"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'morefile'): ?> selected<?php endif; ?>>多文件</option>
                    <option value="date"<?php if ($this->_tpl_vars['fieldData']['ftype'] == 'date'): ?> selected<?php endif; ?>>日期时间</option>
                </select> <span class="succ">不可修改</span></td>
            </tr>
            <tr>
            	<td align="right">表单初始值：<br /><span class="hui" id="point"></span></td>
                <td><textarea class="textarea" name="defaults"><?php echo $this->_tpl_vars['fieldData']['defaults']; ?>
</textarea></td>
            </tr>
            <tr>
            	<td align="right">表单是否必填：</td>
                <td><label for="ismust1"><input type="radio" name="ismust" id="ismust1" value="1"<?php if ($this->_tpl_vars['fieldData']['ismust'] == 1): ?> checked="checked"<?php endif; ?> />是</label> <label for="ismust0"><input type="radio" name="ismust" id="ismust0" value="0"<?php if ($this->_tpl_vars['fieldData']['ismust'] == 0): ?> checked="checked"<?php endif; ?> />否</label> <span class="succ">后台增加信息会验证是否必须填写</span></td>
            </tr>
            <tr>
            	<td align="right">排序：</td>
                <td><input type="text" value="<?php echo $this->_tpl_vars['fieldData']['sort']; ?>
" name="sort" value="0" class="inputText" style="width:25px; text-align:center;" /> <span class="succ">值越大排序越前</span></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['modData']['mid']; ?>
" /><input type="hidden" name="fid" value="<?php echo $this->_tpl_vars['fieldData']['fid']; ?>
" /><input type="submit" value="提交" name="updateField" class="inputSub" id="updateField" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>