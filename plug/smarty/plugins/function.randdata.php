<?php 

//信息随机调用标签
//  <{randdata}>
//  参数：
//      classid：栏目id 必须
//      isclassid : 是否只调用该classid的随机信息 有值代表是，没值为该classid所属模型下全部随机信息
//      num：    数量 默认：10
//      id : 不包含该id信息，默认空
//返回的数据变量名：$randdata_data
function smarty_function_randdata($param,&$smarty){
    $classid = $param['classid'];
    $isclassid = false;
    if(isset($param['isclassid'])) $isclassid = true;
    $id = $param['id'];
    if(!$classid || !$GLOBALS['allclass'][$classid]) return;
    $num = $param['num'] ? $param['num'] : 10;
    $contentModel = null;
    if($contentModel == null) $contentModel = new ContentModel($classid);
    $data = $contentModel->randData($num,$classid,$id,$isclassid);
    $smarty->assign('randdata_data',$data);
}
?>