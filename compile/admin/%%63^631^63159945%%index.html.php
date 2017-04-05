<?php /* Smarty version 2.6.28, created on 2017-03-25 17:06:11
         compiled from Tags/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'classurl', 'Tags/index.html', 49, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="template/admin/css/style.css" />
<script type="text/javascript" src="template/admin/js/jquery.js"></script>
<script type="text/javascript" src="template/admin/js/main.js"></script>
</head>

<body>
<div class="dqnav">
<ul>
	<li>当前位置：</li>
	<li><a href="?m=index&a=main">后台首页</a></li>
	<li><span>&gt;</span></li>
    <?php if ($this->_tpl_vars['name']): ?>
    <li><a href="?m=Tags&a=index">Tags管理</a></li>
	<li><span>&gt;</span></li>
	<li>Tags搜索</li>
    <?php else: ?>
    <li>Tags管理</li>
    <?php endif; ?>
</ul>
</div>
<div class="mainBox">
    <div class="mainList" id="allcheckbox">
    <div class="contentListSearchBox"><form method="get" class="right_form" action=""><p>搜索Tags：<input type="text" class="inputText inputText1" name="name" placeholder="输入Tags名字" value='<?php echo $this->_tpl_vars['name']; ?>
' />
        <input type="hidden" name="m" value="Tags" />
        <input type="hidden" name="a" value="search" />
        <input type="submit" name="searchSub" class="inputSub1" value="搜索" />
        </p></form></div>
        <div class="mainHead"><a href="?m=Tags&a=updateAllNum">+更新全部Tags信息数量</a> <span class="hui">操作Tags信息后更新 主要应用于前后台显示Tags信息数量</span></div>
        <table cellpadding="0" cellspacing="1" border="0">
            <tr>
            	<th width="5%">选择</th>
                <th width="5%">ID</th>
                <th width="10%">Tags名称</th>
                <th width="10%">绑定栏目</th>
                <th width="10%">推荐</th>
                <th width="10%">信息数量</th>
                <th width="20%">操作</th>
            </tr>
            <form method="post" action="?m=Tags&a=manageTags">
            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            <tr>
            	<td><input type="checkbox" value="<?php echo $this->_tpl_vars['v']['id']; ?>
" name="id[]" /></td>
                <td><?php echo $this->_tpl_vars['v']['id']; ?>
</a></td>
                <td class="padding"><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></td>
                <td><?php if ($this->_tpl_vars['v']['classid']): ?><a href="<?php echo smarty_function_classurl(array('id' => $this->_tpl_vars['v']['classid']), $this);?>
" target="_blank"><?php echo $this->_tpl_vars['allclass'][$this->_tpl_vars['v']['classid']]['classname']; ?>
</a><?php else: ?>无<?php endif; ?></td>
                <td><?php if ($this->_tpl_vars['v']['tuijian']): ?><span class="hong">[<?php echo $this->_tpl_vars['v']['tuijian']; ?>
级推荐]</span><?php endif; ?><?php if ($this->_tpl_vars['v']['remen']): ?><span class="hong">[<?php echo $this->_tpl_vars['v']['remen']; ?>
级热门] </span><?php endif; ?><?php if (! $this->_tpl_vars['v']['remen'] && ! $this->_tpl_vars['v']['tuijian']): ?>无<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['v']['num']; ?>
</td>
                <td><a href="?m=Tags&a=bindclass&id=<?php echo $this->_tpl_vars['v']['id']; ?>
&bind=<?php echo $this->_tpl_vars['v']['classid']; ?>
">绑定栏目</a><a href="?m=Tags&a=updateNum&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">更新信息数量</a><a href="?m=Tags&a=info&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">所属信息</a><a href="?m=Schtml&a=getUrlSctags&tagsname=<?php echo $this->_tpl_vars['v']['name']; ?>
">生成</a><a href="?m=Tags&a=update&id=<?php echo $this->_tpl_vars['v']['id']; ?>
">修改</a><a href="?m=Tags&a=delete&id=<?php echo $this->_tpl_vars['v']['id']; ?>
" onclick="return confirm('确定要删除此Tags？');">删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
            <tr>
            	<td width="5%"><input type="checkbox" class="allcheckbox" /></td>
                <td width="95%" colspan="6" class="padding">
                <input type="submit" value="删除" onclick="return confirm('确定要删除这些Tags？');" class="inputSub1" name="deleteMore" /> <select name="bindClass">
                <option value="0">取消绑定</option>>
                <?php $_from = $this->_tpl_vars['classData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <?php if ($this->_tpl_vars['v']['classtype'] == 0): ?>
                <option value="<?php echo $this->_tpl_vars['v']['classid']; ?>
"><?php echo $this->_tpl_vars['v']['html']; ?>
<?php echo $this->_tpl_vars['v']['classname']; ?>
</option>
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </select> <input type="submit" class="inputSub1" value="批量绑定栏目" name="bindClassSub" /> <input type="submit" name="updateChangeNum" value="更新Tags信息数" class="inputSub1" /> 删除信息数量小于（<b style='color:#f00;'>&lt;</b>）<input type="text" name='num' class='inputText' value='1' style="width:20px; text-align:center;" /> 的Tags <input type="submit" class='inputSub1' name="deleteNotInfo" value='删除' onclick="return confirm('确定要删除吗？');" /> <select name="remen">
                	<option value="0">不推荐</option>
                    <option value="1">一级热门</option>
                    <option value="2">二级热门</option>
                    <option value="3">三级热门</option>
                    <option value="4">四级热门</option>
                    <option value="5">五级热门</option>
                    <option value="6">六级热门</option>
                    <option value="7">七级热门</option>
                    <option value="8">八级热门</option>
                    <option value="9">九级热门</option>
                    <option value="10">十级热门</option>
                </select> <input type="submit" name="remenSub" value="热门"class='inputSub1'  /> <select name="tuijian">
                	<option value="0">不推荐</option>
                    <option value="1">一级推荐</option>
                    <option value="2">二级推荐</option>
                    <option value="3">三级推荐</option>
                    <option value="4">四级推荐</option>
                    <option value="5">五级推荐</option>
                    <option value="6">六级推荐</option>
                    <option value="7">七级推荐</option>
                    <option value="8">八级推荐</option>
                    <option value="9">九级推荐</option>
                    <option value="10">十级推荐</option>
                </select> <input type="submit" name="tuijianSub" class='inputSub1'  value="推荐" /> 
                </td>
            </tr>
            </form>
        </table>
    </div>
    <div class="page">共 <?php echo $this->_tpl_vars['num']; ?>
 条 <?php echo $this->_tpl_vars['page']; ?>
</div>
</div>
</body>
</html>