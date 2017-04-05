<?php 

//Tags信息调用标签
//  <{tagsinfo}>
//  参数：
//      id : Tags id
//      classid：栏目id 默认 不限
//      num：    数量 默认：10
//      order：	 排序方式 默认：id desc
//返回的数据变量名：$tagsinfo_data
function smarty_function_tagsinfo($param,&$smarty){
    $id = (int)$param['id'];
    if(!$id) return;
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'id desc';
    if(isset($param['classid'])) $where = 'classid = '.$param['classid'];
    if(!$tagsModel) $tagsModel = new TagsModel();
    $data = $tagsModel->getInfo($id,$num,$where,$order);
    $smarty->assign('tagsinfo_data',$data);
}
?>