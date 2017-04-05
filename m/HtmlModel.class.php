<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   html生成模块
 */
defined('LMXCMS') or exit();
class HtmlModel extends Model{
    private $smarty;
    private $config;
    private $parse;
    public function __construct(&$smarty,$config) {
        parent::__construct();
        $this->smarty = $smarty;
        $this->config = $config;
        $this->parse = new parse($smarty);
    }
    //保存html
    private function set_html($data,$path='',$filename='index.html'){
        $path = ROOT_PATH.$path;
        $path = rtrim($path,'/');
        file::mkDir($path); //创建不存在的目录
        file::put($path.'/'.$filename,$data);
    }
    //生成首页
    public function sc_home(){
        $this->set_html($this->parse->home());
    }
    
    
    
    
    
    
    //根据专题id生成专题
    public function sc_zt_html($data,$ztModel){
        $_GET['ishtml'] = 1;
        if($data['islist']){//专题分页列表
            //计算分页数量
            $count = $ztModel->infoCount($data['id']);
            $page_num = ceil($count / $data['pagenum']);
            $page_num = $page_num < 1 ? 1 : $page_num;
            $_GET['count'] = $page_num;
            $index = 0;
            for($i=1;$i<=$page_num;$i++){
                $_GET['curr'] = $i;
                $_GET['page'] = $i;
                $_GET['path'] = $data['path'];
                $tem = $this->parse->zt($data['id'],$ztModel,$data,$count);
                $filename = $i <= 1 ? 'index.html' : 'index_'.$i.'.html';
                $this->set_html($tem,$data['path'],$filename);
                //分组提示
                if($i % $this->config['sc_group_num'] == 0){
                    $index++;
                    rewrite::speed('专题【'.$data['name'].'】第 <span style="color:#f00; font-weight:bold;">'.$index.'</span> 组分页生成成功');
                }
            }
        }else{//专题封面
            $tem = $this->parse->zt($data['id'],$ztModel,$data);
            $this->set_html($tem,$data['path'],'index.html');
        }
    }
    
    //根据栏目id生成栏目页面和栏目分页
    public function classid_sc($classid,$classData){
        $_GET['ishtml'] = 1;
        $_GET['path'] = $classData['classpath'];
        if($classData['classtype'] == 0){
            if($classData['islist']){ //分页栏目生成
                $classidArr = category::getClassChild($classid,true);
                foreach($classidArr as $v){
                    $classidStr[] = $v['classid'];
                }
                $classidStr = implode(',',$classidStr);
                $this->tab = array($classData['tab']);
                $param['where'] = 'classid in('.$classidStr.')';
                $count = parent::countModel($param);
                $page = $this->getClassPage($classid,$count); //总页数
                $_GET['count'] = $page; //给page类传入总页数
                $model = new ContentModel($classid);
                $index=0;
                for($i=1;$i<=$page;$i++){
                    $_GET['curr'] = $i;//当前页数
                    $_GET['page'] = $i;
                    $tem = $this->parse->lists($classid,$model,$count); //获取内容
                    $filenamem = $i <= 1 ? 'index.html' : 'index_'.$i.'.html';
                    //保存页面
                    $this->set_html($tem,$classData['classpath'],$filenamem);
                    //分组提示
                    if($i % $this->config['sc_group_num'] == 0){
                        $index++;
                        rewrite::speed('栏目【'.$GLOBALS['allclass'][$classid]['classname'].'】第 <span style="color:#f00; font-weight:bold;">'.$index.'</span> 组分页生成成功');
                    }
                }
            }else{ //封面栏目生成
                $tem = $this->parse->lists($classid,false); //获取内容
                //保存页面
                $this->set_html($tem,$classData['classpath']);
                rewrite::speed('栏目【'.$classData['classname'].'生成成功');
            }
        }else if($classData['classtype'] == 1){
            $model = new ColumnModel();
            $tem = $this->parse->lists($classid,$model); //获取内容
            $single_pathinfo = pathinfo($classData['classpath']);
            //保存页面
            $this->set_html($tem,$single_pathinfo['dirname'] == '.' ? '' : $single_pathinfo['dirname'],$single_pathinfo['basename']);
        }
    }
    
    //根据classid查询共有多少分页
    public function getClassPage($classid,$count){
        if($count < 1) return 1;
        return ceil($count / $GLOBALS['allclass'][$classid]['pagenum']);
    }
    
    
    //按照模型mid生成内容页面
    public function scMidHtml($mid){
        if(!isset($GLOBALS['allmodule'][$mid])) return;
        $tab = $GLOBALS['allmodule'][$mid]['tab'];
        $count = $this->tabCount($tab);
        if($count <= 0) return; 
        $pagenum = ceil($count/$this->config['sc_group_num']);
        $model = new ContentModel(false,$mid);
        for($i=0;$i<$pagenum;$i++){
            $limit = ($i*$this->config['sc_group_num']).','.$this->config['sc_group_num'];
            $data = $this->tabData($tab,$limit);
            if($data) $this->scInfoHtml($data,$model);
            rewrite::speed('生成【'.$GLOBALS['allmodule'][$mid]['mname'].'】模型下第 <span><b>'.($i+1).'</b></span> 组内容成功');
        }
    }
    
    
    
    
    //按照栏目id生成信息
    public function scInfoHtmlClassid($classid){
        $tab = $GLOBALS['allclass'][$classid]['tab'];
        if(!$tab) return;
        $where = 'classid='.$classid;
        $count = $this->tabCount($tab,$where);
        if($count <= 0) return; 
        $pagenum = ceil($count/$this->config['sc_group_num']);
        $model = new ContentModel($classid);
        for($i=0;$i<$pagenum;$i++){
            $limit = ($i*$this->config['sc_group_num']).','.$this->config['sc_group_num'];
            $data = $this->tabData($tab,$limit,$where);
            if($data) $this->scInfoHtml($data,$model);
            rewrite::speed('生成【'.$GLOBALS['allclass'][$classid]['classname'].'】栏目下第 <span><b>'.($i+1).'</b></span> 组内容成功');
        }
    }
    
    //根据信息数组生成内容页面
    private function scInfoHtml($infoData,$model){
        //遍历生成页面
        if(!$infoData) return;
        foreach($infoData as $v){
            $tem = $this->parse->contents($v['id'],$v['classid'],$model);
            $filename = $v['id'].'.html';
            $path = $GLOBALS['allclass'][$v['classid']]['classpath'].'/'.date('Ymd',$v['time']);
            $this->set_html($tem,$path,$filename); //保存html
        }
    }
    
    //根据时间生成内容信息
    public function scInfoTimeHtml($classidArr,$endtime){
        //循环生成栏目信息
        foreach($classidArr as $v){
            if(!isset($GLOBALS['allclass'][$v]) || $GLOBALS['allclass'][$v]['classtype'] != 0) continue;
            $tab = $GLOBALS['allclass'][$v]['tab'];
            if(!$tab) continue; //如果数据表不存在跳过
            $where = array('classid='.$v,'time > '.$endtime);
            $count = $this->tabCount($tab,$where);
            if($count <= 0) continue; //如果没有数据跳过此栏目
            //开始分组生成
            $pagenum = ceil($count/$this->config['sc_group_num']);
            $model = new ContentModel($v);
            for($i=0;$i<$pagenum;$i++){
                $limit = ($i*$this->config['sc_group_num']).','.$this->config['sc_group_num'];
                $data = $this->tabData($tab,$limit,$where);
                if($data){
                    foreach($data as  $value){
                        $tem = $this->parse->contents($value['id'],$value['classid'],$model);
                        $filename = $value['id'].'.html';
                        $path = $GLOBALS['allclass'][$value['classid']]['classpath'].'/'.date('Ymd',$value['time']);
                        $this->set_html($tem,$path,$filename); //保存html
                    }
                    rewrite::speed('生成第 <span><b>'.($i+1).'</b></span> 组内容成功'); 
                }
            }
        }
    }
    
    //按照信息id生成内容
    public function scInfoIdHtml($idArr,$classid){
        $model = new ContentModel($classid);
        $i = 0;
        //遍历分组
        foreach($idArr as $v){
            $tab = $GLOBALS['allclass'][$classid]['tab'];
            $wh = 'id in('.$v.') and classid='.$classid;
            //分组获取数据
            $data = $this->tabData($tab,false,$wh);
            if($data){
                $i++;
                foreach($data as  $value){
                    $tem = $this->parse->contents($value['id'],$value['classid'],$model);
                    $filename = $value['id'].'.html';
                    $path = $GLOBALS['allclass'][$value['classid']]['classpath'].'/'.date('Ymd',$value['time']);
                    $this->set_html($tem,$path,$filename); //保存html
                }
                rewrite::speed('生成第 <span><b>'.$i.'</b></span> 组内容成功'); 
            }
        }
    }
    
    //根据数据表和条件返回信息总数
    public function tabCount($tab,$where=''){
        $this->tab = array($tab);
        if($where) $param['where'] = $where;
        return parent::countModel($param);
    }
    
    //根据数据表返回生成内容所需数据
    public function tabData($tab,$limit='',$where=''){
        $this->tab = array($tab);
        $this->field = array('id','classid','time');
        if($where) $param['where'] = $where;
        if($limit) $param['limit'] = $limit;
        return parent::selectModel($param);
    }
    
    //根据tags id生成Tags列表
    public function scTags($model,$data){
        $count = $model->infoCount($data['id']);
        $count = $count == 0 ? 1 : $count; //如果没有数据，则默认设置1，避免无法生成页面
        $pagenum = ceil($count / $data['pagenum']); //计算总页数
        $index = 0;
        $dirname = $this->config['is_tags_chinese'] ? $data['name'] : string::scPinYin($data['name']);
        $mkdirName = $this->config['is_tags_chinese'] ? iconv('utf-8',$this->config['system_coding'],$data['name']) : string::scPinYin($data['name']);
        $_GET['ishtml'] = 1;
        $_GET['path'] = 'tags/'.$dirname;
        $_GET['count'] = $pagenum;
        for($i=1;$i<=$pagenum;$i++){
            $_GET['curr'] = $i;//当前页数
            $tem = $this->parse->tags($data,$model,$count); //获取内容
            $filenamem = $i <= 1 ? 'index.html' : 'index_'.$i.'.html';
            //保存页面
            $this->set_html($tem,'tags/'.$mkdirName,$filenamem);
            //分组提示
            if($i % $this->config['sc_group_num'] == 0){
                $index++;
                rewrite::speed('Tags【'.$data['name'].'】第 <span style="color:#f00; font-weight:bold;">'.$index.'</span> 组分页生成成功');
            }
        }
    }
    
    //注销掉模板解析对象
    public function __destruct(){
        unset($this->parse);
    }
    
}
?>