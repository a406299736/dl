<?php /* Smarty version 2.6.28, created on 2015-01-21 21:39:52
         compiled from Upload/filelist.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/content.js"></script>
</head>

<body>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <div class="uploadBox">
            <h1 class="slideSub"><a href="?m=Upload&a=file&dir=<?php echo $this->_tpl_vars['uploadDir']; ?>
&field=<?php echo $this->_tpl_vars['selectid']; ?>
<?php if ($this->_tpl_vars['ismore']): ?>&ismore=<?php echo $this->_tpl_vars['ismore']; ?>
<?php endif; ?>">上传文件</a><span class="curr">文件列表</span></h1>
            <div class="mainUploadFileBoxOk">
            	<h3>上传成功文件</h3>
                <div class="fileborder">
            	<table cellpadding="0" cellspacing="0" border="0" class="selectfilelist" id="selectfile">
                	<tr>
                    	<th width="10%">选择</th>
                        <th>原始名字</th>
                        <th>新名字</th>
                    </tr>
                    <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <tr>
                    	<td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['path']; ?>
" onclick='selectFileF(<?php echo $this->_tpl_vars['ismore']; ?>
,this);' /></td>
                        <td><?php echo $this->_tpl_vars['v']['temname']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['v']['name']; ?>
</td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </table>
                <?php if ($this->_tpl_vars['page']): ?>
                <div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
                <?php endif; ?>
                </div>
                <div class="okSub"><input type="button" class="inputSub1" onclick="okSelectFile('<?php echo $this->_tpl_vars['selectid']; ?>
',<?php echo $this->_tpl_vars['ismore']; ?>
);" value="确定选择" /> <input type="button" class="inputSub1" onclick="closeSelect();" value="关闭" /></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>