<?php /* Smarty version 2.6.28, created on 2016-04-12 17:07:51
         compiled from Upload/imagelist.html */ ?>
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
            <h1 class="slideSub"><a href="?m=Upload&a=img&dir=<?php echo $this->_tpl_vars['uploadDir']; ?>
&field=<?php echo $this->_tpl_vars['selectid']; ?>
<?php if ($this->_tpl_vars['ismore']): ?>&ismore=<?php echo $this->_tpl_vars['ismore']; ?>
<?php endif; ?>">上传图片</a><span class="curr">图片列表</span></h1>
            <div class="mainUploadImgListBox">
            	<ul id="selectfile">
                	<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <li onclick='selectFile(<?php echo $this->_tpl_vars['ismore']; ?>
,this);'><img src='<?php echo $this->_tpl_vars['v']['path']; ?>
' /><em></em><?php if ($this->_tpl_vars['v']['issmall']): ?><b>缩略图</b><?php endif; ?></li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
                <?php if ($this->_tpl_vars['page']): ?>
                <div class="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
                <?php endif; ?>
                <div class="okSub"><input type="button" class="inputSub1" onclick="okSelect('<?php echo $this->_tpl_vars['selectid']; ?>
',<?php echo $this->_tpl_vars['ismore']; ?>
);" value="确定选择" /> <input type="button" class="inputSub1" onclick="closeSelect();" value="关闭" /></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>