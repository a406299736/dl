<?php /* Smarty version 2.6.28, created on 2015-02-07 11:09:41
         compiled from D:/wwwroot/ceshi_web/20.9-xin.com/data/form/17.php */ ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>图片：</td>
<td width='88%'><input type='text' id='tupianlb' name='tupianlb' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['tupianlb']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','tupianlb',0)" /></td>
</tr>
<tr>
<td align='right' width='12%'>正文：</td>
<td width='88%'><textarea id='content' name='content'  style='width:100%;height:300px;'><?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['content']; ?>
<?php else: ?><?php endif; ?></textarea><script type='text/javascript'>UE.getEditor('content',{toolbars:[['fullscreen','source','|','undo','redo','|','bold','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat','formatmatch','autotypeset','blockquote','pasteplain','|','forecolor','backcolor','insertorderedlist','insertunorderedlist','selectall','cleardoc','|','rowspacingtop','rowspacingbottom','lineheight','|','customstyle','paragraph','fontfamily','fontsize','|','directionalityltr','directionalityrtl','indent','|','justifyleft','justifycenter','justifyright','justifyjustify','|','touppercase','tolowercase','|','link','unlink','anchor','|','imagenone','imageleft','imageright','imagecenter','|','insertimage','emotion','music','attachment','map','gmap','insertframe','insertcode','webapp','pagebreak','template','background','|','horizontal','date','time','spechars','|','inserttable','deletetable','insertparagraphbeforetable','insertrow','deleterow','insertcol','deletecol','mergecells','mergeright','mergedown','splittocells','splittorows','splittocols','charts','|','print','preview','searchreplace','drafts']],imagePath:'/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',imageUrl:'/admin.php?m=Edit&a=editUpload&path=/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',filePath:'/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/',fileUrl:'/admin.php?m=Edit&a=editUpload&path=/file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
/'})</script></td>
</tr>