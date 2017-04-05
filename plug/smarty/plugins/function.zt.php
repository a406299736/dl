<?php 

//专题调用标签
//  <{zt}>
//  参数：
//      num：    数量 默认：10
//      order：	 排序方式 默认：sort desc,id desc
//      where : 自定义条件 如 id=10或者num > 0
//返回的数据变量名：$zt_data
function smarty_function_zt($param,&$smarty){
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'sort desc,id desc';
    if(isset($param['where'])) $where[] = $param['where'];
    $where[] = 'display = 0';
    if($ztModel == null) $ztModel = new ZtModel();
    $data = $ztModel->getData($num,$where,$order);
    $smarty->assign('zt_data',$data);
}
?>