<?php 

//返回Tags url地址
//  <{tagsurl}>
//  参数：
//      id：    Tags id
//直接输出
function smarty_function_tagsurl($param,&$smarty){
    $id = $param['id'];
    if(!$id) return;
    if(!$tagsModel) $tagsModel = new TagsModel();
    $data = $tagsModel->getOne($id);
    $url['type'] = 'tags';
    $url['name'] = $data['name'];
    return url($url);
}
?>