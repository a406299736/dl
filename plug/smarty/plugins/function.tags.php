<?php 

//Tags调用标签
//  <{tags}>
//  参数：
//      num：    数量 默认：10
//      order：	 排序方式 默认：num desc,id desc
//      remen :  热门级别  默认 全部
//      tuijian : 推荐界别 默认 全部
//      where :  自定义条件 如 num > 0
//返回的数据变量名：$tags_data
function smarty_function_tags($param,&$smarty){
    $num = $param['num'] ? $param['num'] : 10;
    $order = $param['order'] ? $param['order'] : 'num desc,id desc';
    if(isset($param['where'])) $where[] = $param['where'];
    if(isset($param['remen'])) $where[] = 'remen='.$param['remen'];
    if(isset($param['tuijian'])) $where[] = 'tuijian='.$param['tuijian'];
    $where[] = 'display = 0';
    if(!$tagsMoel) $tagsMoel = new TagsModel();
    $where = implode(' and ',$where);
    $data = $tagsMoel->getData($num,$where,$order);
    $smarty->assign('tags_data',$data);
}
?>