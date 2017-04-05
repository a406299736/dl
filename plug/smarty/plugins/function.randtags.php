<?php 

//randtags随机调用标签
//  <{randtags}>
//  参数：
//      num：    数量 默认：10
//      classid： 调用绑定该classid的tags 默认不限
//      remen :  热门级别  默认 全部
//      tuijian : 推荐界别 默认 全部
//      where :  自定义条件 如 num > 0
//返回的数据变量名：$randtags_data
function smarty_function_randtags($param,&$smarty){
    $num = $param['num'] ? $param['num'] : 10;
    if(isset($param['classid'])) $classid = $param['classid'];
    if(isset($param['where'])) $where = $param['where'];
    if(isset($param['remen'])) $remen = $param['remen'];
    if(isset($param['tuijian'])) $tuijian = $param['tuijian'];
    if(!$tagsMoel) $tagsMoel = new TagsModel();
    $data = $tagsMoel->tagsRand($num,$classid,$where,$remen,$tuijian);
    $smarty->assign('randtags_data',$data);
}
?>