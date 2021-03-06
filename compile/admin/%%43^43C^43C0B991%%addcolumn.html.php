<?php /* Smarty version 2.6.28, created on 2016-04-12 15:36:49
         compiled from Column/addcolumn.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
<script type="text/javascript" src="template/admin/js/column.js"></script>


</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
	<li><a href="?m=Column&a=index">栏目管理</a></li>
	<li><span>&gt;</span></li>
	<li>增加栏目</li>
</ul>
</div>
<div class="mainBox">
    <div class="mainForm" id="mainForm">
        <form action="?&m=Column&a=addColumn" method="post" name="form1">
    	<table cellpadding="0" border="0" cellspacing="0">
        	<tr>
                <th colspan="2">基本设置</th>
            </tr>
        	<tr>
            	<td width="12%" align="right">栏目名称：</td>
            	<td width="88%"><input type="text" class="inputText" name="classname" id="classname" /></td>
            </tr>
        	<tr>
            	<td align="right">栏目类型：</td>
            	<td><select name="classtype" id="classtype">
                	<option value=0>普通栏目</option>
                    <option value=1>单页栏目</option>
                    <option value=2>外部链接栏目</option>
                </select> <span class="succ">选择后不可修改</span></td>
            </tr>
       </table>
       <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK">
             <tr>
            	<td align="right" width="12%">所属模块：</td>
            	<td width="88%"><select name="mid" id="mid">
                <?php $_from = $this->_tpl_vars['moduleList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                <option value=<?php echo $this->_tpl_vars['i']['mid']; ?>
><?php echo $this->_tpl_vars['i']['mname']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
       </table>
       <table cellpadding="0" border="0" cellspacing="0">
        	<tr>
            	<td align="right" width="12%">上级栏目：</td>
            	<td width="88%"><select name="uid" id="uid">
                	<option value=0 data-path='/'>作为顶级栏目</option>
                	<?php $_from = $this->_tpl_vars['classList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                    <option value=<?php echo $this->_tpl_vars['i']['classid']; ?>
 data-path='<?php echo $this->_tpl_vars['i']['classpath']; ?>
'><?php echo $this->_tpl_vars['i']['html']; ?>
<?php echo $this->_tpl_vars['i']['classname']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display1 columnK">
            <tr>
                <td width="12%" align="right">单页文件名：</td>
                <td width="88%"><span id="singlespanInput" class="spanInputText">根目录/</span><input type="hidden" name="singleparentPath" id="singleparentPath" value="/" /><input type="text" style="border-right:0px;" class="inputText spanInput inputWidth" name="singlepath" id="singlepath" /><span class="qspanInputText">.html</span> <input type="button" class="inputSub1" value="生成拼音文件名" id="scSingleFile" /> <input type="button" class="inputSub1" id="isFile" value="检查文件是否存在" /> <span class="succ">由字母、数字、下划线构成</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK">
            <tr>
                <td width="12%" align="right">本栏目目录：</td>
                <td width="88%"><span id="spanInput" class="spanInputText">根目录/</span><input type="hidden" name="parentPath" id="parentPath" value="/" /><input type="text" class="inputText spanInput inputWidth" name="classpath" id="classpath" /> <input type="button" class="inputSub1" id="scDir" value="生成拼音目录" /> <input type="button" class="inputSub1" value="检查目录是否存在" id="isDir" /><span class="succ">由字母、数字、下划线、“/”构成</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0">
            <tr>
                <td width="12%" align="right">栏目图片：</td>
                <td width="88%"><input type="text" name="images" id="images" class="inputText inputWidth" /> <input type="button" class="inputSub1" value="选择图片" onclick="selectUpload(1,'file/cate','images');" /></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK">
            <tr>
                <td width="12%" align="right">每页显示信息：</td>
                <td width="88%"><input type="text" class="inputText" name="pagenum" value="10" style="width:30px; text-align:center;" /> 条</td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK">
            <tr>
                <td width="12%" align="right">是否为分页列表：</td>
                <td width="88%"><label for="islist1"><input type="radio" checked="checked" name="islist" value="1" id="islist1" />是</label> <label for="islist0"><input type="radio" id="islist0" name="islist" value="0" />否</label> <span class="succ">是：栏目页面支持数据分页，否：栏目页面为封面页、栏目首页，不支持数据分页</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0">
            <tr>
                <td width="12%" align="right">前台是否隐藏：</td>
                <td width="88%"><input type="checkbox" name="display" value="1" /></td>
            </tr>
            <tr>
                <td width="12%" align="right">绑定域名：</td>
                <td width="88%"><input type="text" name="domain" class="inputText" value="" /> <span class="succ">http://开头 需要解析域名配合，不懂请留空</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display2 columnK">
        	<tr>
            	<td width="12%" align="right">外部链接：</td>
            	<td width="88%"><input type="text" class="inputText" name="classurl" id="classurl" value="http://" /> <span class="succ">http://开头</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK">
            <tr>
                <th colspan="2">模板设置</th>
            </tr>
            <tr>
            	<td width="12%" align="right">栏目模板：</td>
            	<td width="88%"><select name="listtem" id="listtem">
                <option value=0>选择栏目模板</option>
                <?php $_from = $this->_tpl_vars['listTemFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
            <tr>
            	<td align="right">内容模板：</td>
            	<td><select name="contem" id="contem">
                <option value=0>选择内容模板</option>
                <?php $_from = $this->_tpl_vars['contentTemFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
            <tr>
            	<td align="right">搜索模板：</td>
            	<td><select name="searchtem" id="searchtem">
                <option value=0>选择搜索模板</option>
                <?php $_from = $this->_tpl_vars['searchTemFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display1 columnK">
            <tr>
                <th colspan="2">模板设置</th>
            </tr>
            <tr>
            	<td width="12%" align="right">单页模板：</td>
            	<td width="88%"><select name="singletem" id="singletem">
                <option value=0>选择单页模板</option>
                <?php $_from = $this->_tpl_vars['singleTemFile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <option value="<?php echo $this->_tpl_vars['v']; ?>
"><?php echo $this->_tpl_vars['v']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display0 columnK_seo columnK">
            <tr>
                <th colspan="2">SEO设置</th>
            </tr>
            <tr>
            	<td width="12%" align="right">网页标题：</td>
            	<td width="88%"><input type="text" class="inputText inputWidth" name="title" id="title" /> <span class="succ">META Title</span> <span class="hui">最多255个字符</span></td>
            </tr>
            <tr>
            	<td align="right">网页关键词：</td>
            	<td><input type="text" class="inputText inputWidth" name="keywords" id="keywords" /> <span class="succ">META Keywords</span> <span class="hui">关键词以“,”号隔开</span></td>
            </tr>
            <tr>
            	<td align="right">网页描述：</td>
            	<td><textarea class="textarea" name="description"></textarea> <span class="succ">META Description <span class="hui">针对搜索引擎设置的网页描述</span></span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0">
            <tr>
            	<td width="12%" align="right">排序：</td>
            	<td width="88%"><input type="text" value=0 class="inputText" style="width:30px; text-align:center;" name="sort" /> <span class="succ">值越大排序越前</span></td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0" class="display1 columnK">
            <tr>
                <th>单页内容</th>
            </tr>
            <tr>
            	<td><?php echo $this->_tpl_vars['editor']; ?>
</td>
            </tr>
        </table>
        <table cellpadding="0" border="0" cellspacing="0">
            <tr>
                <td width="10%">&nbsp;</td>
                <td width="90%"><input type="submit" value="提交" class="inputSub" name="addColumn" id="addColumn" /></td>
            </tr>
        </table>
        </form>
    </div>
</div>
</body>
</html>