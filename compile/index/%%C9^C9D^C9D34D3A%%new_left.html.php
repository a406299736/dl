<?php /* Smarty version 2.6.28, created on 2017-04-01 13:55:13
         compiled from new_left.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'new_left.html', 5, false),array('function', 'single', 'new_left.html', 17, false),)), $this); ?>
 
      <div class="mid_2le">
    	<div class="mid_2le01">
        	<div class="mid_201top">新闻中心</div>
                  <?php echo smarty_function_menu(array('classid' => 148,'child' => 1), $this);?>
 
            <div class="mid_201mid">
             <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                 <a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"<?php if (( $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['topid'] || $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['classid'] ) && $this->_tpl_vars['classid'] != 4): ?> id='active1'<?php endif; ?>><?php echo $this->_tpl_vars['v']['classname']; ?>
</a>
                <img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/dy_left_a.jpg" />
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <div class="mid_201foot"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/dy_left_foot.jpg" /></div>
        </div>
        <div class="mid_2le02">
        	<img src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/dy_left_lx.jpg" />
            <span>
            	   <?php echo smarty_function_single(array('classid' => 165), $this);?>

        	<?php echo $this->_tpl_vars['single_data']['content']; ?>

            </span>
        </div>
    </div>