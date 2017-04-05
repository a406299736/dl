<?php 

//当前信息所属专题调用标签 只能在信息页面使用
//  <{ztchild}>
//  参数：
//      num：    数量 默认：10
//      order：	 排序方式 默认：sort desc,id desc
//      where : 自定义条件  默认 无
//返回的数据变量名：$ztchild_data
function smarty_function_ztchild($param,&$smarty){
    $id = $smarty->_tpl_vars['id'];
    $classid = $smarty->_tpl_vars['classid'];
    if(!$classid || !$id) return;
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'sort desc,id desc';
    if(isset($param['where'])) $where[] = $param['where'];
    $where[] = 'display = 0';
    $where = implode(' and ',$where);
    if($ztModel == null) $ztModel = new ZtModel();
    $data = $ztModel->getZtInfoData($id,$classid,$order,$where,$num);
    $smarty->assign('ztchild_data',$data);
}
?>