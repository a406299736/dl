<?php /* Smarty version 2.6.28, created on 2016-11-17 09:06:12
         compiled from Content/updatecontent.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'Content/updatecontent.html', 77, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/content.js"></script>
<?php echo $this->_tpl_vars['editorFileJs']; ?>

<?php echo $this->_tpl_vars['moreform']; ?>

</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Content&a=index&classid=<?php echo $this->_tpl_vars['classid']; ?>
">信息管理</a></li>
	<li><span>&gt;</span></li>
	<li>修改信息</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
    <h1 class="slideSub" id="slideSub"><span class="curr">基本设置</span><span>其他设置</span></h1>
        <form action="?&m=Content&a=update" method="post" name="form1" onsubmit="return checkContent();">
        <table cellpadding="0" border="0" cellspacing="0" class="slideBox" id="k1">
        	<tr>
            	<th colspan="2">其他设置</th>
            </tr>
            <tr>
            	<td align="right">属性：</td>
            	<td>推荐 <select name="tuijian" id="tuijian">
                <option value=0<?php if ($this->_tpl_vars['tuijian'] == $this->_tpl_vars['k']): ?> selected<?php endif; ?>>不推荐</option>
                <?php $_from = $this->_tpl_vars['tuijianSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                <option value=<?php echo $this->_tpl_vars['k']; ?>
<?php if ($this->_tpl_vars['tuijian'] == $this->_tpl_vars['k']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;热门 <select name="remen" id="remen">
                <option value=0<?php if ($this->_tpl_vars['tuijian'] == $this->_tpl_vars['k']): ?> selected<?php endif; ?>>不推荐</option>
                <?php $_from = $this->_tpl_vars['remenSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                <option value=<?php echo $this->_tpl_vars['k']; ?>
<?php if ($this->_tpl_vars['remen'] == $this->_tpl_vars['k']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
            <tr>
            	<td align="right" width="12%">Tags：</td>
            	<td><input type="hidden" value="<?php echo $this->_tpl_vars['tagsname']; ?>
" name='tagsname2' /><textarea name="tagsname" id="tagsname" class="textarea"><?php echo $this->_tpl_vars['tagsname']; ?>
</textarea> <input type="button" value="复制关键词" onclick="copytags();" class="inputSub1"  /> <input type="button" value="选择Tags" onclick="changeTags();" class="inputSub1"  /> <span class="succ"> 以英文逗号“,”隔开</span></td>
            </tr>
            <tr>
            	<td align="right">推送至专题：</td>
            	<td><input type="hidden" value="<?php echo $this->_tpl_vars['ztid']; ?>
" name='ztid2' /><input type="text" name="ztid" id="ztid" value="<?php echo $this->_tpl_vars['ztid']; ?>
"  class="inputText inputWidth"  /> <input type="button" class="inputSub1" value="选择专题" onclick="add_pushzt()" /> <span class="succ">可以直接填写专题id，多个专题用“,”逗号隔开</span></td>
            </tr>
            <tr>
            	<td align="right">外部链接：</td>
                <td><input type="text" name="url" id="url" value="<?php echo $this->_tpl_vars['url']; ?>
" class="inputText" /> <span class="succ">填写后信息连接地址将为此链接 “http://开头”</span></td>
            </tr>
        </table>
    	<table cellpadding="0" border="0" cellspacing="0" class="slideBox" id="k0" style="display:table;">
        	<tr>
            	<th colspan="2">基本设置</th>
            </tr>
            <tr>
            	<td align="right" width="12%">标题：</td>
            	<td width="88%"><input type="text" class="inputText inputWidth" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" id="title" /> <span class="succ">网页标题</span></td>
            </tr>
        	<tr>
            	<td align="right">关键词：</td>
            	<td><input type="text" class="inputText inputWidth" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
" id="keywords" /> <input type="button" value="提取标题关键字" id="tqTitle" class="inputSub1" /> <input type="button" value="提取正文关键字" id="tqContent" class="inputSub1" />  <span class="succ">网页关键字 以英文逗号“,”隔开</span></td>
            </tr>
            <tr>
            	<td align="right">描述：</td>
                <td><textarea class="textarea" name="description"><?php echo $this->_tpl_vars['description']; ?>
</textarea> <span class="succ">网页描述</span></td>
            </tr>
            <tr>
            	<td align="right">发布时间：</td>
                <td><input type="text" class="inputText" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
" style="width:150px;" id="time" name="time" /> <input type="button" class="inputSub1" value="获取当前时间" onclick="document.getElementById('time').value='<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
'" /></td>
            </tr>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['formdir']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <tr>
            	<td align="right">附加选项</td>
                <td><span class="hui"><label for="is_description"><input type="checkbox" id="is_description" name="is_description" value="1" style="vertical-align:middle;"<?php if ($this->_tpl_vars['public']['is_check_description']): ?>checked <?php endif; ?> /> 自动提取正文第一段为描述</label> <label for="is_content_key"><input type="checkbox" id="is_content_key" name="is_content_key" value="1" style="vertical-align:middle;"<?php if ($this->_tpl_vars['public']['is_content_key']): ?>checked <?php endif; ?> /> 自动提取正文为关键字</label> <label for="is_title_key"><input type="checkbox" id="is_title_key" name="is_title_key" value="1" style="vertical-align:middle;"<?php if ($this->_tpl_vars['public']['is_title_key']): ?>checked <?php endif; ?> /> 自动提取标题为关键字</label></span></td>
            </tr>
       </table>
       <table cellpadding="0" cellspacing="0" border="0">
            <tr>
            	<td width="12%"></td>
                <td><input type="hidden" name="classid" value="<?php echo $this->_tpl_vars['classid']; ?>
" /><input type="hidden" name="backurl" value="<?php echo $this->_tpl_vars['backurl']; ?>
" /><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" /><input type="submit" value="提交" name="updateInfo" class="inputSub" id="updateInfo" /></td>
            </tr>
       </table>
        </form>
    </div>
</div>
</body>
</html>