<?php 
//相关链接标签
function smarty_function_xglink($param,&$smarty){
    //初始化参数
    $classid = $smarty->_tpl_vars['classid'];
    $id = $smarty->_tpl_vars['id'];
    if(!$classid || !$id) return;
    $keyword = $smarty->_tpl_vars['keywords'];
    $num = $param['num'] ? $param['num'] : 10; 
    if(!$keyword) return ''; //如果没有关键词那么直接返回空
    $keyword = explode(',',$keyword);
    foreach($keyword as $v){
        $where[] = "title LIKE '%".$v."%'";
    }
    $where = implode(' or ',$where);
    $where = '('.$where.') and id != '.$id;
    //查找数据
    $model = new ContentModel($classid);
    $data = $model->xgLink($num,$where);
    if($data){
        $newdata = info2var($data);
        $smarty->assign('xglink_data',$newdata);
    }
}
?>