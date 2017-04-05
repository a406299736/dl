<?php /* Smarty version 2.6.28, created on 2017-03-27 11:10:50
         compiled from index-bak.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'article', 'index-bak.html', 62, false),array('modifier', 'lmxstr', 'index-bak.html', 101, false),array('modifier', 'date_format', 'index-bak.html', 101, false),)), $this); ?>
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
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/owl.carousel.css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/owl.theme.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/js.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/play.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/jquery.SuperSlide.2.1.1.source.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/owl.carousel.min.js"></script>
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


<div class="play">
    <div class="fxplay">
      <?php echo smarty_function_article(array('classid' => 55,'num' => 5), $this);?>

        <div class="play-box">
         <?php $_from = $this->_tpl_vars['article_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lunbo_s'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lunbo_s']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['v']):
        $this->_foreach['lunbo_s']['iteration']++;
?>
          <div class="play-item" style="background:url(<?php echo $this->_tpl_vars['v']['lbpic']; ?>
) center no-repeat;"></div>
          <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
    <div class="bar">
    	<div id="playNo"></div>
    </div>
    <script>
    //图片新闻轮播
$('.fxplay').fxuiPlay({
  
	//prev:$('#prev'),     //上一张
	//next:$('#next'),     //下一张
	no:$('#playNo'),     //是否开启数字
	auto:true,           //是否自动播放
	autotime:3000,       //自动播放间隔
	effect:2,            //特效类型 0：渐变；1：变小 ;2:左右; 3:上下;
	efftime:400,         //渐变时间
	ismobi:false,         //如果手机端请传ture,会开启划动的操作。
	evt:'click'          //click(默认)和hover/mouserover
	
});
    </script>
</div>



<div class="ban01">&nbsp;</div>
<div class="s_new">
<div class="s_new01">
	<div class="s_new011"><span>公司新闻</span><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_new01.jpg" /></div>
    <div class="s_new012">
    	<div class="bd">
          <?php echo smarty_function_article(array('classid' => 146,'num' => 12), $this);?>
 
        	<ul>
              <?php $_from = $this->_tpl_vars['article_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['product_s'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['product_s']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['v']):
        $this->_foreach['product_s']['iteration']++;
?>
            	<li><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('lmxstr', true, $_tmp, 70, '...') : smarty_modifier_lmxstr($_tmp, 70, '...')); ?>
 </a><span>[<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
]</span></li>
              <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
        <div class="hd"><a class="prev"> < </a><a class="next"> > </a></div>
        <script>
                $(function(){
					jQuery(".s_new012").slide({
						prevCell:".prev",
						nextCell:".next",
						effect:"left",
						mainCell:".bd ul",
						autoPlay:true,          
						interTime:2000,      
						trigger:'click' 
						})
					})
                </script>
    </div>
    <div class="clear"></div>
</div>
</div>

<script type="text/javascript">
$(function(){
	$('#scroll').owlCarousel({
		items: 9,
		autoPlay: true,
		navigation: true,
		navigationText: ["",""],
		scrollPerPage: true
	});
});
</script>

<div class="scroll-outer">


 
	<div id="scroll" class="owl-carousel">
 
                  <!--1-->
			<div class="item">
			<a href="/index.php?m=list&a=index&classid=219"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp01.jpg" /></a>
			<p>公共广播</p>
		    </div>
            <!--2-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=218"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp02.jpg" /></a>
			<p>视屏会议</p>
		    </div>
            <!--3-->
	      	<div class="item">
		    <a href="/index.php?m=list&a=index&classid=217"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp03.jpg" /></a>
			<p>综合布线</p>
		    </div>
            <!--4-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=220"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp04.jpg" /></a>
			<p>机房建设</p>
		    </div>
            <!--5-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=221"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp05.jpg" /></a>
			<p>集团电话</p>
		    </div>
            <!--6-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=222"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp06.jpg" /></a>
			<p>安防监控</p>
		    </div>
            <!--7-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=223"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp07.jpg" /></a>
			<p>门禁考勤</p>
		    </div>
            <!--8-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=227"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp08.jpg" /></a>
			<p>收款系统</p>
		    </div>
            <!--9-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=229"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp09.jpg" /></a>
			<p>智能家居</p>
		    </div>
            
            <!--10-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=224"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg02.jpg" /></a>
			<p>网络安全</p>
		     </div>
             <!--11-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=228"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg01.jpg" /></a>
			<p>一卡通系统</p>
		    </div>
            
            <!--12-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=226"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg04.jpg" /></a>
			<p>停车管理</p>
		    </div>
            
             <!--13-->
		    <div class="item">
			<a href="/index.php?m=list&a=index&classid=225"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg03.jpg" /></a>
			<p>楼宇对讲</p>
		    </div>
 
      
            
	
        
	</div>
</div>




<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>