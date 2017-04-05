<?php /* Smarty version 2.6.28, created on 2015-01-17 19:30:53
         compiled from D:/phpStudy/WWW/data/form/9.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>链接网址：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='link' id='link' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['link']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>标题图片170*70：</td>
<td width='88%'><input type='text' id='hzpic' name='hzpic' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['hzpic']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','hzpic',0)" /></td>
</tr>