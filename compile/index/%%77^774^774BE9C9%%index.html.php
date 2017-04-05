<?php /* Smarty version 2.6.28, created on 2017-04-01 18:32:35
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'article', 'index.html', 24, false),array('modifier', 'lmxstr', 'index.html', 54, false),array('modifier', 'date_format', 'index.html', 54, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/style.css">
	<!--<link rel="stylesheet" href="./css/owl.carousel.css">-->
	<!--<link rel="stylesheet" href="./css/dl_style.css">-->
	<!--<script src="./js/owl.carousel.min.js"></script>-->
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner" style="height: auto">
		<?php echo smarty_function_article(array('classid' => 55,'num' => 5), $this);?>

		<?php  $i=1;  ?>
		<?php $_from = $this->_tpl_vars['article_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lunbo_s'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lunbo_s']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['v']):
        $this->_foreach['lunbo_s']['iteration']++;
?>
			<div class="item <?php  if ($i==1) {echo 'active';}  ?>">
				<img class="img-responsive img-wd" src="<?php echo $this->_tpl_vars['v']['lbpic']; ?>
">
			</div>
		<?php  $i++;  ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control left" href="#myCarousel"
	   data-slide="prev">&lsaquo;
	</a>
	<a class="carousel-control right" href="#myCarousel"
	   data-slide="next">&rsaquo;
	</a>
</div>

<div style="height: 1px;"></div>
<div class="custom-news-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 col-md-2 col-lg-2 col-lg-offset-1" style="padding-top: 7px;">
				公司新闻 &nbsp;
				<p class="glyphicon glyphicon-menu-right"></p>
			</div>
			<div id="scroll_div" class="col-xs-4 col-md-10 col-lg-7" style="padding-top: 7px;">
				<?php echo smarty_function_article(array('classid' => 146,'num' => 12), $this);?>

				<div id="scroll_begin">
					<?php $_from = $this->_tpl_vars['article_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['product_s'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['product_s']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['v']):
        $this->_foreach['product_s']['iteration']++;
?>
					<a style="color: white" href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('lmxstr', true, $_tmp, 70, '...') : smarty_modifier_lmxstr($_tmp, 70, '...')); ?>
 </a><span>[<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y/%m/%d') : smarty_modifier_date_format($_tmp, '%Y/%m/%d')); ?>
]</span>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<?php endforeach; endif; unset($_from); ?>
				</div>
				<div id="scroll_end"></div>
			</div>
		</div>
	</div>
</div>

<div style="height: 30px;"></div>
<div class="container">
	<div class="row">
		<div id="scroll_div_more" class="col-lg-10 col-lg-offset-1">
			<div id="scroll_begin_more">
				<a href="/index.php?m=list&a=index&classid=219">
					<img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp01.jpg" style="margin: 10px;" title="公共广播">
				</a>
					<a href="/index.php?m=list&a=index&classid=218">
						<img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp02.jpg" style="margin: 10px;"/>
					</a>

				<a href="/index.php?m=list&a=index&classid=217"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp03.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=220"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp04.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=221"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp05.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=222"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp06.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=223"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp07.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=227"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp08.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=229"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/s_cp09.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=224"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg02.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=228"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg01.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=226"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg04.jpg" style="margin: 10px;"/></a>
				<a href="/index.php?m=list&a=index&classid=225"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/xg03.jpg" style="margin: 10px;"/></a>
			</div>
			<div id="scroll_end_more"></div>
		</div>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
<script>
    $(document).ready(function(){
        $('#myCarousel').carousel({interval:3000});
    });

    function ScrollImgLeft(){
        var speed=50;
        var MyMar = null;
        var scroll_begin = document.getElementById("scroll_begin");
        var scroll_end = document.getElementById("scroll_end");
        var scroll_div = document.getElementById("scroll_div");
        scroll_end.innerHTML=scroll_begin.innerHTML;
        function Marquee(){
            if(scroll_end.offsetWidth-scroll_div.scrollLeft<=0)
                scroll_div.scrollLeft-=scroll_begin.offsetWidth;
            else
                scroll_div.scrollLeft++;
        }
        MyMar=setInterval(Marquee,speed);
        scroll_div.onmouseover = function(){
            clearInterval(MyMar);
        };
        scroll_div.onmouseout = function(){
            MyMar = setInterval(Marquee,speed);
        }
    }
    ScrollImgLeft();

    function ScrollImgLeftMore(){
        var speedMore=50;
        var MyMarMore = null;
        var scroll_begin_more = document.getElementById("scroll_begin_more");
        var scroll_end_more = document.getElementById("scroll_end_more");
        var scroll_div_more = document.getElementById("scroll_div_more");
        scroll_end_more.innerHTML=scroll_begin_more.innerHTML;
        function MarqueeMore(){
            if(scroll_end_more.offsetWidth-scroll_div_more.scrollLeft<=0)
                scroll_div_more.scrollLeft-=scroll_begin_more.offsetWidth;
            else
                scroll_div_more.scrollLeft++;
        }
        MyMarMore=setInterval(MarqueeMore,speedMore);
        scroll_div_more.onmouseover = function(){
            clearInterval(MyMarMore);
        };
        scroll_div_more.onmouseout = function(){
            MyMarMore = setInterval(MarqueeMore,speedMore);
        };
    }
    ScrollImgLeftMore();
</script>
</html>