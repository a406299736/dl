<?php /* Smarty version 2.6.28, created on 2016-04-12 09:48:58
         compiled from File/file.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'File/file.html', 50, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>

<script type="text/javascript">
$(function(){
	$('.selectFileInput td').click(function(){
		if($(this).index() != 0){ 
			var checkeds = !$(this).parent('tr').find('input:checkbox').attr('checked');
			$(this).parent('tr').find('input:checkbox').attr('checked',checkeds);
		}
	})
})
</script>
</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li>文件管理</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainList">
    <h1 class="slideSub"><a href="?m=File&a=index&type=0">图片管理</a><a href="?m=File&a=index&type=1" class="curr">文件管理</a></h1>
    	<form action="?m=File&a=delete" method="post">
        <input type="hidden" name="type" value="1" />
    	<div class="fileList mainList uploadListBox" id="allcheckbox">
            <table cellpadding="0" border="0" cellspacing="1">
                <tr>
                    <th width="5%"><input type="checkbox" class="allcheckbox" /></th>
                    <th width="5%">ID</th>
                    <th width="55%">文件名</th>
                    <th width="10%">大小</th>
                    <th width="15%">上传时间</th>
                </tr>
                <?php $_from = $this->_tpl_vars['file']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['filelist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filelist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['v']):
        $this->_foreach['filelist']['iteration']++;
?>
                <tr class="selectFileInput">
                    <td><input type="checkbox" value='<?php echo $this->_tpl_vars['v']['fid']; ?>
#####<?php echo $this->_tpl_vars['v']['path']; ?>
' id='file<?php echo $this->_foreach['filelist']['iteration']; ?>
' name="fid[]" /></td>
                    <td><?php echo $this->_tpl_vars['v']['fid']; ?>
</td>
                    <td class="padding"><label for="file<?php echo $this->_foreach['filelist']['iteration']; ?>
"><?php echo $this->_tpl_vars['v']['temname']; ?>
<br /><span class="hui"><?php echo $this->_tpl_vars['v']['name']; ?>
</span></label></Td>
                    <td><?php echo $this->_tpl_vars['v']['size']; ?>
</td>
                    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%Y-%m-%d %H:%M:%S')); ?>
</td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
                <tr>
                	<td><input type="checkbox" class="allcheckbox" /></td>
                    <td colspan="5" class="padding"><input type="submit" value="删除选中" onclick="return confirm('确定要删除吗？');" name="delfile" class='inputSub1' /></td>
                </tr>
            </table>
        </div>
        </form>
    </div>
    <div class="page">共 <?php echo $this->_tpl_vars['num']; ?>
 条 <?php echo $this->_tpl_vars['page']; ?>
</div>
</div>
</body>
</html>