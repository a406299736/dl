<?php /* Smarty version 2.6.28, created on 2015-01-17 17:33:57
         compiled from D:/phpStudy/WWW/data/form/1.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'D:/phpStudy/WWW/data/form/1.php', 12, false),)), $this); ?>
<?php echo '<?php'; ?>
 
 if(!defined('LMXCMS')){exit();} 
 //本文件为缓存文件 无需手动更改
 <?php echo '?>'; ?>
<tr>
<td align='right' width='12%'>产品图片：</td>
<td width='88%'><input type='text' id='pic' name='pic' class='inputText inputWidth' value='<?php if ($this->_tpl_vars['update']): ?><?php echo $this->_tpl_vars['pic']; ?>
<?php else: ?><?php endif; ?>' /> <input type='button' value='上传' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','pic',0)" /></td>
</tr>
<tr>
<td align='right' width='12%'>产品图片集：</td>
<td width='88%'><div class='morefile'><h3>图片列表</h3><ul id='duotp'><?php if ($this->_tpl_vars['update'] && $this->_tpl_vars['duotp']): ?><?php $this->assign('duotp', ((is_array($_tmp='#####')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['duotp']) : explode($_tmp, $this->_tpl_vars['duotp']))); ?><?php $_from = $this->_tpl_vars['duotp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?><li><input type='text' name='duotp[]' class='inputText inputWidth' value='<?php echo $this->_tpl_vars['v']; ?>
'> <span class='red'>移除</span></li><?php endforeach; endif; unset($_from); ?><?php endif; ?></ul><input type='button' value='上传图片' class='inputSub1' onclick="selectUpload(1,'file/d/<?php echo $this->_tpl_vars['classData']['classpath']; ?>
','duotp',1)" />&nbsp;<input type='button' class='inputSub1 addfile' value='远程地址' /></div></td>
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