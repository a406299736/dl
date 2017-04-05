<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   tags控制器
 */
defined('LMXCMS') or exit();
class TagsModel extends Model{
    public function __construct() {
        parent::__construct();
        $this->tab = array('tags');
    }
    
    public function getData($limit,$where=false,$order='id desc'){
        $this->tagTab();
        $this->field = array('id');
        if($where) $param['where'][] = $where;
        $param['limit'] = $limit;
        $param['order'] = $order;
        $id = parent::selectModel($param);
        if($id){
            foreach($id as $v){
                $idArr[] = $v['id'];
            }
            $id = implode(',',$idArr);
            $param = '';
            $this->field = array('*');
            $param['where'] = 'id in('.$id.')';
            $param['order'] = $order;
            $data = parent::selectModel($param);
            foreach($data as $v){
                $url['type'] = 'tags';
                $url['name'] = $v['name'];
                $v['url'] = url($url);
                $newData[] = $v;
            }
            return $newData;
        }else{
            return array();
        }
    }
    
    //绑定栏目
    public function bindClass($id,$classid){
        $this->tagTab();
        $param['where'] = 'id='.$id;
        $data['classid'] = $classid;
        parent::updateModel($data,$param);
    }
    
    
    //更新全部tags信息数量
    public function updateAllNum(){
        $this->field = array('id');
        $group = 500; //每组更新数量
        $count = $this->tagsCount();
        if($count){
            $group_num = ceil($count / $group);
            for($i=0;$i<$group_num;$i++){
                $param['limit'] = $i * $group .','.$group;
                $data = parent::selectModel($param);
                foreach($data as $v){
                    $this->updateNum($v['id']);
                }
                rewrite::speed('更新第 <span class="red">'.($i+1).'</span> 组Tags信息数量成功');
            }
        }
    }
    
    public function push($type,$value,$id){
        $param['where'] = 'id='.$id;
        $data = array($type => $value);
        parent::updateModel($data,$param);
    }
    
    //根据tags id更新所属信息数量
    public function updateNum($id){
        $count = $this->infoCount($id);
        $this->tagTab();
        $param['where'] = 'id='.$id;
        $data = array('num'=>$count);
        parent::updateModel($data,$param);
    }
    
    //根据Tagsid获取所属信息
    public function getInfo($id,$limit,$where=false,$order='id desc'){
        $this->dataTab();
        $this->field = array('id');
        if($where) $param['where'][] = $where;
        $param['where'][] = 'uid='.$id;
        $param['force'] = 'uid';
        $param['limit'] = $limit;
        $param['order'] = 'id desc';
        $infoId = parent::selectModel($param);
        if(!$infoId) return array();
        foreach($infoId as $v){
            $idArr[] = $v['id'];
        }
        $param = '';
        $param['where'] = 'id in('.implode(',',$idArr).')';
        $param['order'] = 'id desc';
        $this->field = array('*');
        $infoData = parent::selectModel($param);
        //遍历获取信息
        $param = '';
        $param['order'] = $order;
        $this->field = array('*');
        foreach($infoData as $v){
            $this->tab = array($GLOBALS['allclass'][$v['classid']]['tab']);
            if(!$this->tab) continue;
            $param['where'] = 'id='.$v['infoid'].' and classid='.$v['classid'];
            $info = parent::oneModel($param);
            $v['time'] = $info['time'];
            $v['title'] = $info['title'];
            $url['type'] = 'content';
            $url['classpath'] = $GLOBALS['allclass'][$info['classid']]['classpath'];
            $url['time'] = $info['time'];
            $url['id'] = $info['id'];
            $url['classid'] = $info['classid'];
            $v['url'] = $info['url'] ? $info['url'] : url($url);
            $v['classname'] = $GLOBALS['allclass'][$v['classid']]['classname'];
            $v['classurl'] = classurl($v['classid']);
            $v['classimage'] = $GLOBALS['allclass'][$v['classid']]['classimage'];
            $newData[] = array_merge($info,$v);
        }
        return $newData;
    }
    
    //根据tags id查询所属信息数量
    public function infoCount($id,$where=false){
        $this->dataTab();
        if($where) $param['where'][] = $where;
        $param['where'][] = 'uid='.$id;
        return parent::countModel($param);
    }
    
    //根据infoid和classid删除tags信息
    public function removeInfoClass($infoid,$classid){
        $this->dataTab();
        $param['where'][] = 'infoid='.$infoid;
        $param['where'][] = 'classid='.$classid;
        return parent::deleteModel($param);
    }
    //根据信息id移除Tags信息
    public function removeInfo($id){
        $this->dataTab();
        $param['where'][] = 'id='.$id;
        parent::deleteModel($param);
    }
    
    //根据Tags的信息数量删除Tags
    public function deleteNotTags($num){
        set_time_limit(0);
        $param['where'] = 'num < '.$num;
        $this->field = array('id','name');
        $data = parent::selectModel($param);
        $idArr = array();
        foreach($data as $v){
            $idArr[] = $v['id'];
        }
        $this->deleteInId($idArr);
    }
    //批量删除tags
    public function deleteInId(array $id){
        $param['where'] = 'id in('.implode(',',$id).')';
        parent::deleteModel($param);
        $this->dataTab();
        $param['where'] = 'uid in('.implode(',',$id).')';
        parent::deleteModel($param);
    }
    
    //根据infoid和classid返回tags
    public function getInfoTags($infoid,$classid,$num=false){
        $this->dataTab();
        $this->field = array('uid');
        $param['where'][] = DB_PRE.'tags_info.infoid = '.$infoid;
        $param['where'][] = DB_PRE.'tags_info.classid = '.$classid;
        $this->join=array(
            'fromTab' => 'tags',
            'field' => array(
                'tags' => array('name','id'),
                'tags_info' => array(),
            ),
            'on' => array(
                array('LEFT','tags_info','tags.id [=] tags_info.uid'),
            ),
        );
        if($num) $param['order'] = DB_PRE.'tags.num desc';
        return parent::joinModel($param);
    }
    
    //tagschild标签数据
    public function getINfoTagsData($infoid,$classid,$num,$order,$where=false){
        $idArr = $this->getInfoTags($infoid,$classid);
        if(!$idArr) return array();
        foreach($idArr as $v){
            $id[] = $v['id'];
        }
        $this->tagTab();
        $this->field = array('*');
        $param['where'][] = 'id in('.implode(',',$id).')';
        $param['limit'] = $num;
        if($where) $param['where'][] = $where;
        $param['order'] = $order;
        $data = parent::selectModel($param);
        foreach($data as $v){
            $url['type'] = 'tags';
            $url['name'] = $v['name'];
            $v['url'] = url($url);
            $newData[] = $v;
        }
        return $newData;
    }
    
    //删除Tags
    public function deleteTags($id){
        $this->tagTab();
        $param['where'] = 'id='.$id;
        parent::deleteModel($param);
        $this->deleteInfo($id); //删除所属信息
    }
    
    //根据Tags id删除所属信息
    public function deleteInfo($id){
        $this->dataTab();
        $param['where'] = 'uid='.$id;
        parent::deleteModel($param);
    }
    
    //根据id修改tags
    public function update($data,$id){
        $param['where'] = 'id='.$id;
        return parent::updateModel($data,$param);
    }
    
    //根据id获取一条tags
    public function getOne($id){
        $this->tagTab();
        $param['where'] = 'id='.$id;
        return parent::oneModel($param);
    }
    
    //根据tags名字查找一条tags
    public function getOneName($name,$is_field=false){
        $this->tagTab();
        $this->field = $is_field ? array('*') : array('id');
        $param['where'][] = "name = '$name'";
        return parent::oneModel($param);
    }
    
    //根据infoid和classid删除Tags信息
    public function deleteInfoData($infoid,$classid){
        $this->dataTab();
        $param['where'][] = 'infoid = '.$infoid;
        $param['where'][] = 'classid = '.$classid;
        parent::deleteModel($param);
    }
    
    //增加tags和tags信息
    public function add($tagname,$classid,$infoid){
        $idArr = $this->getOneName($tagname);
        if(!$idArr){ //增加一个新的tags
            $this->tagTab();
            global $config;
            $tagsData = array(
                'name' => $tagname,
                'title' => $tagname,
                'keywords' => $tagname,
                'description' => $tagname,
                'tem' => 'index',
                'display' => 0,
                'pagenum' => $config['tags_page_num'],
                'num' => 1,
                'remen' => 0,
                'tuijian' => 0,
                'classid' => 0,
            );
            $id = parent::addModel($tagsData);
        }else{
            $id = $idArr['id'];
        }
        //增加tags信息
        $this->dataTab();
        $tagsInfoData = array(
            'infoid' => $infoid,
            'uid' => $id,
            'classid' => $classid,
        );
        parent::addModel($tagsInfoData);
    }
    
    //获取tags总数量
    public function tagsCount($where=false){
        $param = '';
        if($where) $param['where'][] = $where;
        $param['force'] = 'pri';
        return parent::countModel($param);
    }
    
    //根据Tags名字返回id
    public function getNameData($name){
        $param['where'] = "name = '$name'";
        return parent::oneModel($param);
    }
    
    public function tagTab(){
        $this->tab = array('tags');
    }
    
    public function dataTab(){
        $this->tab = array('tags_info');
    }
    //根据多个tagsid获取不重复的所属信息
    public function tagsinfoIn(array $tagsidArr,$num,$id){
        $this->dataTab();
        $this->field = array('distinct infoid,classid');
        $param['where'][] = 'uid in('.implode(',',$tagsidArr).')';
        $param['where'][] = 'infoid != '.$id;
        $param['order'] = 'id desc';
        $param['limit'] = $num;
        return parent::selectModel($param);
    }
    //根据infoid和classid获取一条信息
    public function getTagsInfoOne($infoid,$classid){
        $this->tab = array($GLOBALS['allclass'][$classid]['tab']);
        $this->field = array('*');
        $param['where'] = 'id='.$infoid;
        $data = parent::oneModel($param);
        if($data) return $data;
    }
    
    //tagsrand标签随机调用
    public function tagsRand($num,$classid,$where,$remen,$tuijian){
        $this->tagTab();
        //获取数量
        $countWhere[] = 'display=0';
        if($classid) $countWhere[] = 'classid='.$classid;
        if($where) $countWhere[] = $where;
        if($remen) $countWhere[] = 'remen='.$remen;
        if($tuijian) $countWhere[] = 'tuijian='.$tuijian;
        $countWhere = implode(' and ',$countWhere);
        $count = $this->tagsCount($countWhere);
        if($count <= 0) return array();
        //获取最大id
        $maxNum = parent::sqlModel("select max(id) as max from ".DB_PRE.$this->tab[0]." where $countWhere");
        $maxNum = $maxNum[0]['max'];
        //获取最小id
        $minNum = parent::sqlModel("select min(id) as min from ".DB_PRE.$this->tab[0]." where $countWhere");
        $minNum = $minNum[0]['min'];
        if($count < $num) $num = $count;
        $newData = array();
        while(true){
            $param = array();
            $newData = array_filter($newData); //去除空数据
            if(count($newData) >= $num){
                //赋值
                $newData = tool::array_sort($newData,'num','desc');
                break;
            }
            $param['where'][] = $countWhere;
            $param['where'][] = 'id >= '.rand($minNum,$maxNum);
            $param['order'] = 'id asc';
            $data = parent::oneModel($param);
            if($data){
                $newData[$data['id']] = $data;
            }
        }
        foreach($newData as $v){
            $url['type'] = 'tags';
            $url['name'] = $v['name'];
            $v['url'] = url($url);
            $randTagsData[] = $v;
        }
        return $randTagsData;
    }
}
?>