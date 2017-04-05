<?php /* Smarty version 2.6.28, created on 2015-01-21 21:38:44
         compiled from D:/WWW/data/form/10.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>图片293*421：</td>
<td width='88%'><input type='text' id='pic' name='pic' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['pic']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','pic',0)" /></td>
</tr>
<tr>
<td align='right' width='12%'>上传文件：</td>
<td width='88%'><input type='text' id='file' name='file' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['file']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(2,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','file',0)" /></td>
</tr>