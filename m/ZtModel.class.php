<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   专题模块
 */
defined('LMXCMS') or exit();
class ZtModel extends Model{
    public function __construct() {
        parent::__construct();
        $this->ztTab();
    }
    //后台列表
    public function getData($limit,$where=false,$order='sort desc,id desc'){
        $this->field = array('*');
        $this->ztTab();
        if($limit) $param['limit'] = $limit;
        if($where) $param['where'] = $where;
        $param['order'] = $order;
        $data = parent::selectModel($param);
        if($data){
            foreach($data as $v){
                $param['type'] = 'zt';
                $param['id'] = $v['id'];
                $param['path'] = $v['path'];
                $v['url'] = $v['domain'] ? $v['domain'] : url($param);
                $newData[] = $v;
            }
            return $newData;
        }else{
            return array();
        }
    }
    
    //根据专题id更新专题信息数量
    public function updateNumId($id){
        $num = $this->infoCount($id);
        $this->ztTab();
        $param['where'] = 'id='.$id;
        $data['num'] = $num;
        parent::updateModel($data,$param);
    }
    //信息列表批量推送信息
    public function pustMore($classid,$ztidArr,$idStr){
        $this->dataTab();
        $infoIdArr = explode(',',$idStr);
        foreach($ztidArr as $ztid){
            foreach($infoIdArr as $infoid){
                if($this->is_ztinfo($classid,$infoid,$ztid)) continue;
                $data = array(
                    'classid' => $classid,
                    'uid' => $ztid,
                    'infoid' => $infoid,
                );
                parent::addModel($data);
            }
        }
    }
    
    //根据信息id和栏目id删除专题信息
    public function deleteInfo($classid,$infoid){
        $this->dataTab();
        $param['where'][] = 'infoid='.$infoid;
        $param['where'][] = 'classid='.$classid;
        return parent::deleteModel($param);
    }
    
    //根据信息id和classid和专题id增加专题信息
    public function addInfo($infoid,$classid,array $ztid){
        $this->dataTab();
        $data['infoid'] = $infoid;
        $data['classid'] = $classid;
        foreach($ztid as $v){
            $data['uid'] = $v;
            parent::addModel($data);
        }
    }
    //根据信息id和classid查询专题id
    public function getZtid($infoid,$classid){
        $this->dataTab();
        $this->field = array('uid');
        $param['where'][] = 'infoid='.$infoid;
        $param['where'][] = 'classid='.$classid;
        return parent::selectModel($param);
    }
    //根据信息id和classid查询专题数据
    public function getZtInfoData($infoid,$classid,$order='sort desc,id desc',$where=false,$num){
        $this->dataTab();
        $this->field = array('uid');
        $param['where'][] = 'infoid='.$infoid;
        $param['where'][] = 'classid='.$classid;
        $param['order'] = 'id desc';
        $ztid = parent::selectModel($param);
        if($ztid){
            foreach($ztid as $v){
                $ztidArr[] = $v['uid'];
            }
            $this->ztTab();
            $this->field = array('*');
            $param = '';
            $param['where'][] = 'id in('.implode(',',$ztidArr).')';
            if($where) $param['where'][] = $where;
            $param['order'] = $order;
            $param['limit'] = $num;
            $data = parent::selectModel($param);
            if($data){
                foreach($data as $v){
                    $param['type'] = 'zt';
                    $param['id'] = $v['id'];
                    $param['path'] = $v['path'];
                    $v['url'] = $v['domain'] ? $v['domain'] : url($param);
                    $newData[] = $v;
                }
                return $newData;
            }else{
                return array();
            }
        }else{
            return array();
        }
    }
    
    
    //根据classid和infoid和专题id查询专题信息是否存在
    public function is_ztinfo($classid,$infoid,$uid){
        $param['where'][] = 'classid='.$classid;
        $param['where'][] = 'infoid='.$infoid;
        $param['where'][] = 'uid='.$uid;
        $param['force'] = 'list';
        return parent::countModel($param);
    }
    
    //根据专题id返回专题所属信息列表
    public function infoList($id,$limit,$order='id desc',$where=false){
        $this->dataTab();
        $this->field = array('id');
        if($where) $param['where'][] = $where;
        $param['limit'] = $limit;
        $param['force'] = 'list';
        $param['order'] = $order;
        $param['where'][] = 'uid='.$id;
        $idArr = parent::selectModel($param);
        if(!$idArr) return array();
        foreach($idArr as $v){
            $idData[] = $v['id'];
        }
        $param = ''; //重置sql
        $param['where'] = 'id in('.implode(',',$idData).')';
        $param['order'] = $order;
        $this->field = array('*');
        $infoData = parent::selectModel($param);
        //开始获取数据表数据
        $param = '';//重置sql
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
    //根据专题信息id移除信息
    public function remove($id){
        $this->dataTab();
        if(is_array($id)){
            $param['where'] = 'id in('.implode(',',$id).')';
        }else{
            $param['where'] = 'id='.$id;
        }
        parent::deleteModel($param);
    }
    //增加推荐或者热门
    public function push($type,array $idArr){
        $this->dataTab();
        $param['where'] = 'id in('.implode(',',$idArr).')';
        $data[$type] = (int)$_POST[$type];
        parent::updateModel($data,$param);
    }
    
    //根据专题id和其他条件查询专题信息数量
    public function infoCount($id,$where=false){
        $this->dataTab();
        $param['where'][] = 'uid='.$id;
        if($where) $param['where'][] = $where;
        $param['force'] = 'pri';
        return parent::countModel($param);
    }
    //根据专题id删除专题和专题所属信息
    public function delete($id){
        $this->ztTab();
        //删除专题数据
        $this->deleteDir($id); //删除专题目录
        $param['where'] = 'id='.$id;
        parent::deleteModel($param);
        //删除专题信息数据
        $this->dataTab();
        $param['where'] = 'uid='.$id;
        $param['force'] = 'list';
        parent::deleteModel($param);
    }
    
    //根据id删除专题目录和专题图片
    public function deleteDir($id){
        $this->ztTab();
        $this->field = array('path','images');
        $param['where'] = 'id='.$id;
        $data = parent::oneModel($param);
        if($data['images']){
            $fileModel = new FileModel();
            $fileModel->deleteName($data['images']); //删除图片
        }
        file::delDir(ROOT_PATH.$data['path']); //删除目录
    }
    //根据专题目录查询目录是否存在
    public function is_path($path){
        $this->ztTab();
        $param['where'] = "path = '$path'";
        return parent::countModel($param);
    }
    
    //根据专题id获取专题信息
    public function getOne($id){
        $this->ztTab();
        $this->field = array('*');
        $param['where'] = 'id='.$id;
        return parent::oneModel($param);
    }
    
    //根据专题id查询专题是否存在
    public function is_zt($id){
        $param['where'] = 'id='.$id;
        return parent::countModel($param);
    }
    
    //根据id修改专题
    public function update($id,$data){
        $param['where'] = 'id='.$id;
        return parent::updateModel($data,$param);
    }
    
    //专题全部数量
    public function count($where=false){
        $param = false;
        if($where) $param['where'] = $where;
        return parent::countModel($param);
    }
    
    
    //增加
    public function add($data){
        return parent::addModel($data);
    }
    
    //专题列表数据表和字段
    private function ztTab(){
        $this->tab = array('zt');
    }
    
    //专题数据表和字段
    private function dataTab(){
        $this->tab = array('zt_info');
    }
    
    //批量排序专题
    public function sort(){
        $sortid = $_POST['sortid'];
        $sort = $_POST['sort'];
        foreach($sortid as $k => $v){
            $param['where'] = 'id='.$v;
            $data['sort'] = (int)$sort[$k];
            parent::updateModel($data,$param);
        }
    }
}
?>