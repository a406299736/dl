<?php /* Smarty version 2.6.28, created on 2015-01-22 09:37:03
         compiled from Form/html.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/book.js"></script>


</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Form&a=index">表单管理</a></li>
	<li><span>&gt;</span></li>
	<li>获取代码</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<th style="text-align:center; font-size:16px; font-weight:bold; color:#000;">表单代码：（表单代码可放在模板中任意处）</th>
            </tr>
        	<tr>
            	<td width="88"><textarea class="textarea" style="width:96%; height:200px;"><?php echo $this->_tpl_vars['html']; ?>
</textarea></td>
            </tr>
            <tr>
                <td><span class="succ">请根据自己需要排版，表单代码不可去掉，编辑表单，请在后台去掉相应字段即可，多选，单选，下拉请根据自己需要（根据系统给出的样板）编辑即可。</span></td>
            </tr>
            <tr>
            	<td><input type="button" class="inputSub1" value="返回" onclick="location.href='<?php echo $this->_tpl_vars['backurl']; ?>
'" /></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>