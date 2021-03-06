<?php /* Smarty version 2.6.28, created on 2017-08-19 14:45:51
         compiled from single/zxly.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'single/zxly.html', 121, false),array('function', 'single', 'single/zxly.html', 141, false),)), $this); ?>
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

<script language="javascript" type="text/javascript">
var code ; //在全局 定义验证码
function createCode(){ 
code = new Array();
var codeLength = 4;//验证码的长度
var checkCode = document.getElementById("checkCode");
checkCode.value = "";

var selectChar = new Array(2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');

for(var i=0;i<codeLength;i++) {
   var charIndex = Math.floor(Math.random()*32);
   code +=selectChar[charIndex];
}
if(code.length != codeLength){
   createCode();
}
checkCode.value = code;
}

function validate () {
var inputCode = document.getElementById("input1").value.toUpperCase();

if(inputCode.length <=0) {
   alert("请输入验证码！");
   return false;
}
else if(inputCode != code ){
   alert("验证码输入错误！");
   createCode();
   return false;
}
else {
   alert("成功！");
   return true;
}
}
</script>


 <script language="javascript">

//去空格
function checkspace(checkstr) {
	var str = '';
	for(i = 0; i < checkstr.length; i++) 
	{
		str = str + ' ';
	}
	return (str == checkstr);
}
 

function check_message(formlist){	
	var mingzi_code=new RegExp(/[\u4E00-\u9FA5\uF900-\uFA2D]/);
	
	if (!formlist.mingzi.value.match(mingzi_code)) {
		alert("姓名为空，或者不正确!");
		return false;                
	}

	var dianhua_code=new RegExp(/^0(([1-9]d)|([3-9]d{2}))d{8}$/);
	
	if (!formlist.dianhua.value.match(dianhua_code)) {
		alert("固机号码为空或者不正确!");
		return false;                
	}
	
	var ouxiang_code=new RegExp(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/);
	
	if (!formlist.ouxiang.value.match(ouxiang_code)) {
		alert("邮箱为空，或者不正确!");
		return false;                
	}
	
}


</script>

</head>


<body onLoad="createCode();">

 
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
        <div class="col-sm-3 col-md-2 hidden-xs hidden-sm">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li class="active">

                </li>
                <li style="background-color: #eee">
                    <a href="#" class="nav-header collapsed" data-toggle="collapse">
                        <!--<i class="glyphicon glyphicon-forward"></i>-->
                        <strong style="font-size: 16px">联系我们</strong>
                        <span class="pull-right"></span>
                    </a>
                    <?php echo smarty_function_menu(array('classid' => 128,'child' => 1), $this);?>

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
                <li style="margin-top:100px;background-color: #eee">
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
            <strong class="text-center">欢迎使用网站客户留言，我们期待与您的合作，也希望您提出宝贵的意见和建议，您的留言我们会尽快回复，请选择回复方式，并留下您的真实联系方式.</strong>
            <hr>
            <div style="background-color: #f3f7fb;padding: 1px;">
                <div style="height: 20px;"></div>

                <form class="form-inline" action='/index.php?m=Form&a=index'   method="post" onsubmit="return check_message(this)">
                    <div  class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <label>姓名：</label>
                                <input type="text"  id="name"   name='mingzi'/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>手机号码：</label>
                                <input type="text" id="ph"  name='dianhua' />
                            </div>
                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <label>邮箱：</label>
                                <input type="text"  id="mails"  name='ouxiang'/>
                            </div>
                        </div>
                    </div>
                    <div  class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <p><span>留言类别:</span><select name='liuylb'>
                                    <option value="咨询" >咨询</option>
                                    <option value="建议" >建议</option>
                                    <option value="投诉" >投诉</option>
                                    <option value="表扬" >表扬</option>
                                </select><strong style="color:#F00;">*</strong>必填</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <p><span>选择类别:</span><select name='xuanzlb'>
                                    <option value="计算机房建设" >计算机房建设</option>
                                    <option value="综合布线" >综合布线</option>
                                    <option value="安全防范" >安全防范</option>
                                    <option value="设备购买" >IT设备购买</option>
                                    <option value="外包服务" >IT外包服务</option>
                                    <option value="商务合作咨询" >商务合作咨询</option>
                                </select><strong style="color:#F00;">*</strong>必填</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <p><span>请您留言:</span> <textarea name='qingninl'></textarea> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <p><span>回复方式:</span><select name='huifufs'>
                                    <option value="电话回复" >电话回复</option>
                                    <option value="邮件回复" >邮件回复</option>
                                    <option value="不回复" >不回复</option>
                                </select><strong style="color:#F00;">*</strong>必填</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            验证码：<input type="text" id="input1" />
                            <input type="button" id="checkCode" class="code" style="height:27px;" onClick="createCode()"  />
                            <a href="#" onClick="createCode()" style="color:#105895; font-size:12px; float:right;">换一张</a>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="7">
                    <div style="height: 20px;"></div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <input type="submit" name="dyFormSub" value="确定提交" class="quedingtijiao btn btn-default">
                        </div>
                    </div>
                </form>

            </div>
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