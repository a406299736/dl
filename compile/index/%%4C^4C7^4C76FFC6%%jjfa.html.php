<?php /* Smarty version 2.6.28, created on 2017-08-19 14:43:12
         compiled from single/jjfa.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'single/jjfa.html', 38, false),array('function', 'single', 'single/jjfa.html', 58, false),)), $this); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $this->_tpl_vars['title']; ?>
_<?php echo $this->_tpl_vars['webname']; ?>
</title>

<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
"/>


<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/js/js.js"></script>

</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
    <div class="row">
    <img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/about01.jpg" style="width: 100%" />
    </div></div>

<div style="height: 15px;"></div>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2  hidden-xs hidden-sm">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li class="active">

                </li>
                <li style="background-color: #eee">
                <a href="#" class="nav-header collapsed" data-toggle="collapse">
                        <!--<i class="glyphicon glyphicon-forward"></i>-->
                        <strong style="font-size: 16px">解决方案</strong>
                        <span class="pull-right"></span>
                    </a>
                    <?php echo smarty_function_menu(array('classid' => 125,'child' => 1), $this);?>

                    <ul id="guanyu" class="nav nav-list open secondmenu" style="height: 0px;">
                        <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <li <?php if (( $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['classid'] )): ?> class='bg-primary'<?php endif; ?> style="margin-left:0px; text-align:center">
                            <a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"<?php if (( $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['topid'] || $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['classid'] ) && $this->_tpl_vars['classid'] != 4): ?> id='active1'<?php endif; ?>><?php echo $this->_tpl_vars['v']['classname']; ?>
</a>
                            </a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
                <li style="margin-top: 250px;background-color: #eee">
                    <a href="#" class="nav-header collapsed" data-toggle="collapse">
                        <!--<i class="glyphicon glyphicon-forward"></i>-->
                        <strong style="font-size: 16px;">联系我们</strong>
                        <span class="pull-right"></span>
                    </a>
                    <ul id="lianxi" class="nav nav-list open secondmenu" style="height: 0px;">
                        <li><img src="template/delong/images/contact-us.jpg" alt=""></li>

                        <li  style="margin-left:5px;font-size: 12px; margin-top: 8px;">
                            <?php echo smarty_function_single(array('classid' => 165), $this);?>

                            <?php echo $this->_tpl_vars['single_data']['content']; ?>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-10" style="margin-top: 3px;padding: 0 30px;">
            <span class="pull-right hidden-xs"><?php echo $this->_tpl_vars['navpos']; ?>
</span>
            <hr>
            <span class="img-res" style="font-size: 14px;"><?php echo $this->_tpl_vars['classcontent']; ?>
</span>
        </div>
    </div>
</div>
<div style="height: 170px;"></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>