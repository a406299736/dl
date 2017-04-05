<?php /* Smarty version 2.6.28, created on 2015-01-21 20:14:27
         compiled from D:/WWW/data/form/9.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>标题图片291*230：</td>
<td width='88%'><input type='text' id='hzpic' name='hzpic' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['hzpic']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','hzpic',0)" /></td>
</tr>