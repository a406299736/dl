<?php 

//返回专题url地址
//  <{zturl}>
//  参数：
//      id：    专题id
//直接输出
function smarty_function_zturl($param,&$smarty){
    $id = $param['id'];
    if(!$id) return;
    $url['type'] = 'zt';
    $url['id'] = $id;
    if($GLOBALS['public']['ishtml'] == 1){
        //获取数据
        if($ztModel == null) $ztModel = new ZtModel();
        $data = $ztModel->getOne($id);
        $url['path'] = $data['path'];
    }
    return url($url);
}
?>