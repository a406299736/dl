<?php 

//当前信息所属Tags调用标签 只能在信息页面使用
//  <{tagschild}>
//  参数：
//      num：    数量 默认：10
//      order：	 排序方式 默认：num desc,id desc
//      remen : 热门级别 全部
//      tuijian : 推荐级别  全部
//      where : 自定义条件  默认 无
//返回的数据变量名：$tagschild_data
function smarty_function_tagschild($param,&$smarty){
    $id = $smarty->_tpl_vars['id'];
    $classid = $smarty->_tpl_vars['classid'];
    if(!$classid || !$id) return;
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'num desc,id desc';
    if(isset($param['where'])) $where[] = $param['where'];
    $where[] = 'display = 0';
    if(isset($param['remen'])) $where[] = 'remen='.$param['remen'];
    if(isset($param['tuijian'])) $where[] = 'tuijian='.$param['tuijian'];
    $where = implode(' and ',$where);
    if(!$tagsModel) $tagsModel = new TagsModel();
    $data = $tagsModel->getINfoTagsData($id,$classid,$num,$order,$where);
    $smarty->assign('tagschild_data',$data);
}
?>