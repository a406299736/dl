<?php /* Smarty version 2.6.28, created on 2014-11-26 20:45:36
         compiled from D:/phpStudy/WWW/data/form/4.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>职位编号：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='bianhao' id='bianhao' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['bianhao']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>职位名称：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='zwmc' id='zwmc' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['zwmc']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>工作地点：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='gzdd' id='gzdd' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['gzdd']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>联系顾问：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='lxgw' id='lxgw' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['lxgw']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>年薪：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='lianxin' id='lianxin' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['lianxin']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>公司名称：</td>
<td width='88%'><input type='text' class='inputText inputWidth' name='gsmc' id='gsmc' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['gsmc']; ?>
<?php else: ?><?php endif; ?>' /></td>
</tr>
<tr>
<td align='right' width='12%'>雇主描述：</td>
<td width='88%'><textarea id='gzms' name='gzms'  style='width:100%;height:300px;'><?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['gzms']; ?>
<?php else: ?><?php endif; ?></textarea><script type='text/javascript'>UE.getEditor('gzms',{toolbars:[['fullscreen','source','|','undo','redo','|','bold','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat','formatmatch','autotypeset','blockquote','pasteplain','|','forecolor','backcolor','insertorderedlist','insertunorderedlist','selectall','cleardoc','|','rowspacingtop','rowspacingbottom','lineheight','|','customstyle','paragraph','fontfamily','fontsize','|','directionalityltr','directionalityrtl','indent','|','justifyleft','justifycenter','justifyright','justifyjustify','|','touppercase','tolowercase','|','link','unlink','anchor','|','imagenone','imageleft','imageright','imagecenter','|','insertimage','emotion','music','attachment','map','gmap','insertframe','insertcode','webapp','pagebreak','template','background','|','horizontal','date','time','spechars','|','inserttable','deletetable','insertparagraphbeforetable','insertrow','deleterow','insertcol','deletecol','mergecells','mergeright','mergedown','splittocells','splittorows','splittocols','charts','|','print','preview','searchreplace','drafts']],imagePath:'/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',imageUrl:'/admin.php?m=Edit&a=editUpload&path=/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',filePath:'/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',fileUrl:'/admin.php?m=Edit&a=editUpload&path=/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/'})</script></td>
</tr>