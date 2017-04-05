<?php 

//专题信息调用标签
//  <{ztinfo}>
//  参数：
//      id : 专题id
//      classid：栏目id
//      num：    数量 默认：10
//      order：	 排序方式 默认：id desc
//      remen：  热门信息级别
//      tuijian：推荐信息级别
//返回的数据变量名：$ztinfo_data
function smarty_function_ztinfo($param,&$smarty){
    $id = (int)$param['id'];
    if(!$id) return;
    $where = false;
    $classid = $param['classid'];
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'id desc';
    if($classid) $where[] = 'classid = '.$classid;
    if(isset($param['remen'])) $where[] = 'remen = '.$param['remen'];
    if(isset($param['tuijian'])) $where[] = 'tuijian = '.$param['tuijian'];
    if($where && is_array($where)) $where = implode(' and ',$where);
    if($ztModel == null) $ztModel = new ZtModel();
    $data = $ztModel->infoList($id,$num,$order,$where);
    $smarty->assign('ztinfo_data',$data);
}
?>