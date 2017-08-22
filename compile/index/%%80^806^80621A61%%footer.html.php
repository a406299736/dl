<?php /* Smarty version 2.6.28, created on 2017-08-19 14:54:18
         compiled from footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'footer.html', 5, false),array('function', 'single', 'footer.html', 57, false),array('function', 'link', 'footer.html', 69, false),)), $this); ?>
<!--<footer class="foot-wrap panel-footer">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <?php echo smarty_function_menu(array('classid' => 122,'child' => 1), $this);?>

                <strong><a href="/index.php?m=list&a=index&classid=142">关于我们</a></strong>
                <p></p>
                <ul class="list-unstyled">
                <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <li><a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"><?php echo $this->_tpl_vars['v']['classname']; ?>
</a></li>
                <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div class="col-xs-12 col-md-2">
                <?php echo smarty_function_menu(array('classid' => 123,'num' => 5,'child' => 1), $this);?>

                <strong><a href="/index.php?m=list&a=index&classid=166">解决方案</a></strong>
                <p></p>
                <ul class="list-unstyled">
                    <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <li><a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"><?php echo $this->_tpl_vars['v']['classname']; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div class="col-xs-12 col-md-2">
                <?php echo smarty_function_menu(array('classid' => 124,'num' => 6,'child' => 1), $this);?>

                <strong><a href="/index.php?m=list&a=index&classid=155">工程业绩</a></strong>
                <p></p>
                <ul class="list-unstyled">
                    <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <li><a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"><?php echo $this->_tpl_vars['v']['classname']; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div class="col-xs-12 col-md-2">
                <?php echo smarty_function_menu(array('classid' => 148,'child' => 1), $this);?>

                <strong><a href="/index.php?m=list&a=index&classid=146">新闻中心</a></strong>
                <p></p>
                <ul class="list-unstyled">
                    <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <li><a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"><?php echo $this->_tpl_vars['v']['classname']; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div class="col-xs-12 col-md-2">
                <?php echo smarty_function_menu(array('classid' => 159,'child' => 1), $this);?>

                <strong><a href="/index.php?m=list&a=index&classid=160">招聘信息</a></strong>
                <p></p>
                <ul class="list-unstyled">
                    <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <li><a href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
"><?php echo $this->_tpl_vars['v']['classname']; ?>
</a></li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </div>
            <div class="col-xs-12 col-md-2">
                <strong>联系我们</strong>
                <p></p>
                        <?php echo smarty_function_single(array('classid' => 165), $this);?>

                        <?php echo $this->_tpl_vars['single_data']['content']; ?>

            </div>
        </div>
    </div>
</footer>-->

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul style="list-style-type:none;">
                <?php echo smarty_function_link(array('num' => 10), $this);?>

                <?php $_from = $this->_tpl_vars['link_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <!--<div class="apply_img"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['v']['img']; ?>
" /><?php echo $this->_tpl_vars['v']['name']; ?>
</a></div>-->
                    <li style="float: left;margin-right: 5px;"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"><img src="<?php echo $this->_tpl_vars['v']['img']; ?>
" /></a></li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
    </div>
</div>
<div style="height: 5px;"></div>
<footer class="main-footer bg-primary">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="widget">
                            <div class="content tag-cloud text-center">
                                <p>© 2015 北京德隆伟烨科技发展有限公司  &nbsp;&nbsp;版权所有 &nbsp;&nbsp; 京ICP备15001670号 &nbsp;&nbsp; 京公网安备11010802015957</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p></p>
                        <p class="text-center">地址: 北京市朝阳区小红门鸿博家园C区7号楼 邮编：100176 电话：010-57123699    13910067271 E-mail:shangwu@dlwy.cn</p>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-3 text-center">
                <div class="widget">
                    <img class="img-responsive center-block" src="/dlwywx.jpg" style="width: 30%; height: 30%;"/>
                </div>
            </div>-->
        </div>
    </div>
    <div style="height: 10px;"></div>
</footer>

<script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-231633-0']);

_mvq.push(['$logConversion']);
(function() {
var mvl = document.createElement('script');
mvl.type = 'text/javascript'; mvl.async = true;
mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mvl, s);
})();

</script>  
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?ff4f0dcbd12ccfda7efce832f581a3dc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>