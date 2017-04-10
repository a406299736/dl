<?php /* Smarty version 2.6.28, created on 2017-04-07 20:23:23
         compiled from header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'header.html', 31, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/css/style.css">
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--代码部分begin-->
<div class="container bd">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
"><img class="img-responsive" src="<?php echo $this->_tpl_vars['weburl']; ?>
template/delong/images/logo.jpg"></a></div>
        <div class="col-xs-4 col-md-4 hidden-xs hidden-sm" style="padding-top: 55px;">
            <ul class="list-inline">
                <li><a href="javascript:void(0);" onclick="SetHome(this,'http://www.ceshi.com');">设为首页</a></li>
                <li>|</li>
                <li><a href="/index.php?m=list&a=index&classid=213">加入我们</a></li>
                <li>|</li>
                <li><a>联系电话:13910067271</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container" id='menu_wrap_header'>
    <div class='menu_header'>
        <nav class = "navbar navbar-default" role = "navigation" style="background-color: #04498f;z-index: 999999;width: 100%">
            <button type="button" class="navbar-toggle pull-left" data-toggle="collapse"  data-target="#target-menu">
                <span  class="sr-only">Tag Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse" id="target-menu" style="position: relative;z-index: 999999;">
                <?php echo smarty_function_menu(array('child' => 1), $this);?>

                <ul class="nav navbar-nav custom-nav-bg">
                    <li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
" title="首页"<?php if ($this->_tpl_vars['classid'] == 'home'): ?> class="active"<?php endif; ?> style="color: white">首页</a></li>
                    <?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <li>
                            <a style="color: white" href="<?php echo $this->_tpl_vars['v']['classurl']; ?>
" title="<?php echo $this->_tpl_vars['v']['classname']; ?>
"<?php if (( $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['topid'] || $this->_tpl_vars['v']['classid'] == $this->_tpl_vars['classid'] ) && $this->_tpl_vars['classid'] != 4): ?> class='active <?php if ($this->_tpl_vars['v']['child']): ?> dropdown-toggle <?php endif; ?> '<?php endif; ?> <?php if ($this->_tpl_vars['v']['child']): ?> data-toggle="dropdown" <?php endif; ?>><?php echo $this->_tpl_vars['v']['classname']; ?>

                            <?php if ($this->_tpl_vars['v']['child']): ?>
                            <!--<span class="caret"></span>-->
                            <?php endif; ?>
                            </a>
                            <?php if ($this->_tpl_vars['v']['child']): ?>
                            <ul class="dropdown-menu" style="background-color: #337ab7">
                                <?php $_from = $this->_tpl_vars['v']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                                <li><a style="color: white" href="<?php echo $this->_tpl_vars['i']['classurl']; ?>
"><?php echo $this->_tpl_vars['i']['classname']; ?>
</a></li>
                                <?php endforeach; endif; unset($_from); ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                    <li>
                        <a href="javascript:void(0);" onclick="cli()" class="glyphicon glyphicon-search" style="margin-left: 30px;"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="input-group sh" style="display:none;z-index: 999999;">
            <input type="text" class="form-control input-lg" id="searchVal">
            <span class="input-group-addon btn btn-primary" onclick="sear(this)">搜索</span>
        </div>
    </div>
</div>

<div id="floatTools" class="rides-cs hidden-xs" style="height:246px;">
    <div class="floatL">
        <a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
        <a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
    </div>
    <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
        <div class="cn">
            <h3 class="titZx">北京德隆在线客服</h3>
            <ul>
                <li><span>销售1</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=290649930&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2380038282:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
                <li><span>销售2</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=963959785&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2380038282:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
                <li><span>销售3</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2380038282&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2380038282:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
            </ul>
        </div>
    </div>
</div>

<div style="height: 15px;"></div>
 <script type="text/javascript">
 
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入"+"about:config"+"并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}

$(window).scroll(function () {
    var menu_top = $('#menu_wrap_header').offset().top;
    if ($(window).scrollTop() >= menu_top) {
        $('.menu_header').addClass('menuFixed')
    }
    else {
        $('.menu_header').removeClass('menuFixed')
    }

    $('.img-res img').addClass('img-responsive center-block');
});

$(function(){
    $("#aFloatTools_Show").click(function(){
        $('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
        $('#aFloatTools_Show').hide();
        $('#aFloatTools_Hide').show();
    });
    $("#aFloatTools_Hide").click(function(){
        $('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
        $('#aFloatTools_Show').show();
        $('#aFloatTools_Hide').hide();
    });
});

function cli()
{
    var sh = $('.sh');
    if (sh.css('display') == 'none') {
        sh.show();
    } else {
        sh.hide();
    }
}
function sear(obj)
{
    alert('暂时无法搜索');
    console.log($('#searchVal').val());
}
</script>