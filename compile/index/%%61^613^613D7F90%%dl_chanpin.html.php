<?php /* Smarty version 2.6.28, created on 2017-04-01 13:54:19
         compiled from column/dl_chanpin.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['webname']; ?>
</title>

<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
"/>


<link href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/dl_style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/js.js"></script>
<script type="text/javascript">
$(function(){

	$li1 = $(".apply_nav .apply_array");
	$window1 = $(".apply .apply_w");
	$left1 = $(".apply .img_l");
	$right1 = $(".apply .img_r");
	
	$window1.css("width", $li1.length*166);

	var lc1 = 0;
	var rc1 = $li1.length-5;
	
	$left1.click(function(){
		if (lc1 < 1) {
			alert("已经是第一张图片");
			return;
		}
		lc1--;
		rc1++;
		$window1.animate({left:'+=166px'}, 1000);
	});

	$right1.click(function(){
		if (rc1 < 1){
			alert("已经是最后一张图片");
			return;
		}
		lc1++;
		rc1--;
		$window1.animate({left:'-=166px'}, 1000);
	});

})
</script>


</head>


<body>

 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="middle_1"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/about01.jpg" /></div>
<div class="middle_2">
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'chanpin_left.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="mid_2ri">
    	<div class="mid_ri01"><a href="#">网站首页</a> > 产品中心</div>
        <div class="cp_1">
        
          <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <div class="cp01">
            	<img src="<?php echo $this->_tpl_vars['v']['pimgs']; ?>
" />
                <span>
                	<font><?php echo $this->_tpl_vars['v']['title']; ?>
</font>
                    <em><?php echo $this->_tpl_vars['v']['description']; ?>
</em>
					<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
">+ 查看详细</a>
                </span>
                <div class="clear"></div>
            </div>
          <?php endforeach; endif; unset($_from); ?>
    
            
        </div>
        <div class="fy">
          <?php echo $this->_tpl_vars['page']; ?>

        </div>
    </div>


<div class="clear"></div>
</div>
   
   
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>