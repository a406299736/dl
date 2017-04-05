<?php /* Smarty version 2.6.28, created on 2017-04-01 18:03:13
         compiled from gywm_left.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'gywm_left.html', 18, false),array('function', 'single', 'gywm_left.html', 36, false),)), $this); ?>

<link href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/erji_style.css" type="text/css" rel="stylesheet">
<div style="height: 15px;"></div>
<!--右侧导航-->
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li class="active">

                </li>
                <li>
                    <a href="#guanyu" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-forward"></i>
                        <strong style="font-size: 16px">关于我们</strong>
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <?php echo smarty_function_menu(array('classid' => 122,'child' => 1), $this);?>

                    <ul id="guanyu" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                            <li>
                                <a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"<?php if (( $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['topid'] || $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['classid'] ) && $this->_tpl_vars['classid'] != 4): ?> id='active1'<?php endif; ?>><?php echo $this->_tpl_vars['v']['classname']; ?>

                                </a>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </li>
                <li>
                    <a href="#lianxi" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-forward"></i>
                        <strong style="font-size: 16px;">联系我们</strong>
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="lianxi" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li  style="margin-left:5px;font-size: 12px; margin-top: 8px;">
                            <?php echo smarty_function_single(array('classid' => 165), $this);?>

                            <?php echo $this->_tpl_vars['single_data']['content']; ?>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-9" style="margin-top: 3px;">
            <span class="pull-right"><?php echo $this->_tpl_vars['navpos']; ?>
</span>
            <hr>
            <span style="font-size: 14px;"><?php echo $this->_tpl_vars['classcontent']; ?>
</span>
        </div>
    </div>
</div>