<?php /* Smarty version 2.6.28, created on 2015-01-18 12:57:02
         compiled from D:/wwwroot/ceshi_web/15.9-xin.com/data/form/5.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>图片：</td>
<td width='88%'><input type='text' id='lbpic' name='lbpic' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['lbpic']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','lbpic',0)" /></td>
</tr>