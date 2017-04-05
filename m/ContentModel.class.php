<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   内容模块
 */
defined('LMXCMS') or exit();
class ContentModel extends Model{
    private $classid;
    private $mid;
    public function __construct($classid=false,$mid=false) {
        parent::__construct();
        $this->field = array('*');
        $this->classid = $classid;
        $this->mid = $mid;
        if($classid){
            $this->tab = array($GLOBALS['allclass'][$classid]['tab']);
            $this->mid = $GLOBALS['allclass'][$classid]['mid'];
        }else if($mid){
            $this->tab = array($GLOBALS['allmodule'][$mid]['tab']);
        }else{
            rewrite::error('数据表有误','?m=Content');
        }
    }
    
    //增加信息
    public function add($data){
        $ztid = $data[1]['ztid'];
        $tagsname = $data[1]['tagsname'];
        unset($data[1]['ztid'],$data[1]['ztid2'],$data[1]['tagsname'],$data[1]['tagsname2']);
        $id = parent::addModel($data[1]);
        if(isset($data[2])){
            $this->tab = array($data['tab'].'_1');
            $data[2]['uid'] = $id;
            parent::addModel($data[2]);
        }
        //增加专题
        if($ztid){
            $ztModel = new ZtModel();
            $ztModel->addInfo($id,$this->classid,explode(',',$ztid));
        }
        //增加Tags
        if($tagsname){
            $tagsArr = tags2arr($tagsname);
            $tagsModel = new TagsModel();
            //遍历增加TAGS和tags信息
            foreach($tagsArr as $v){
                $tagsModel->add($v,$this->classid,$id);
            }
        }
    }
    
    //修改信息
    public function updateInfo($data){
        $id = (int)$_POST['id'];
        $ztid = $data[1]['ztid'];
        $ztid2 = $data[1]['ztid2'];
        $tagsname = $data[1]['tagsname'];
        $tagsname2 = $data[1]['tagsname2'];
        unset($data[1]['ztid'],$data[1]['ztid2'],$data[1]['tagsname'],$data[1]['tagsname2']);
        $param['where'] = 'id='.$id;
        parent::updateModel($data[1],$param); //修改主表
        if(isset($data[2])){//修改副表
            $this->tab = array($data['tab'].'_1');
            $param['where'] = 'uid='.$id;
            parent::updateModel($data[2],$param);
        }
        //修改专题
        if($ztid != $ztid2){
            $ztModel = new ZtModel();
            $ztModel->deleteInfo($this->classid,$id); //删除该信息的专题信息
            if($ztid){
                //重新增加专题信息
                $ztModel->addInfo($id,$this->classid,explode(',',$ztid));
            }
        }
        //修改Tags
        if($tagsname != $tagsname2){
            $tagsModel = new TagsModel();
            //删除该信息所属Tags
            $tagsModel->deleteInfoData($id,$this->classid);
            $tagsArr = tags2arr($tagsname);
            $tagsArr = array_filter($tagsArr);
            if($tagsArr){
                //遍历增加TAGS和tags信息
                foreach($tagsArr as $v){
                    $tagsModel->add($v,$this->classid,$id);
                }
            }
        }
    }
    
    //根据id获取信息数据
    public function updateData($id,$tab=false,$isGet=true){
        if($tab) $this->tab = $tab;
        $param['where'] = 'id='.$id;
        $data1 = parent::oneModel($param); //主表数据
        $this->tab = array($this->tab[0].'_1');
        $param['where'] = 'uid='.$id;
        $data2 = parent::oneModel($param); //副表
        //查询信息所属专题id
        $ztid = array();
        $tagsStr = array();
        if($isGet){ //判断是否为后台访问
            //查询所属专题
            $ztModel = new ZtModel();
            $ztidArr = $ztModel->getZtid($id,$this->classid);
            if($ztidArr){
                foreach($ztidArr as $v){
                    $ztid[] = $v['uid'];
                }
                $ztid['ztid'] = implode(',',$ztid);
            }
            //查询所属tags
            $tagsModel = new TagsModel();
            $tagsData = $tagsModel->getInfoTags($id,$this->classid);
            if($tagsData){
                foreach($tagsData as $v){
                    $tagsArr[] = $v['name'];
                }
                $tagsStr['tagsname'] = implode(',',$tagsArr);
            }
        }
        return array_merge($data1,$data2,$ztid,$tagsStr);
    }
    
    //根据信息id判断信息是否存在
    public function is_info($id){
        $param['where'] = 'id='.$id;
        return parent::countModel($param);
    }
    
    //获取信息列表
    public function getInfolist($page,$classid,$where=''){
        $this->field = array('id');
        $param['limit'] = $page;
        $param['order'] = 'id desc';
        $param['force'] = 'list';
        if($classid) $param['where'][] = 'classid='.$classid;
        if($where) $param['where'][] = $where;
        $id = parent::selectModel($param);
        if($id){
            foreach($id as $v){
                $newid[] = $v['id'];
            }
            $param = '';
            $param['where'] = 'id in('.implode(',',$newid).')';
            $this->field = array('*');
            $param['order'] = 'id desc';
            return parent::selectModel($param);
        }else{
            return array();
        }
    }
    
    //相关链接标签
    public function xgLink($num,$where){
        $param['limit'] = $num;
        $param['where'][] = $where;
        $param['force'] = 'title';
        return parent::selectModel($param);
    }
    
    //获取信息总条数
    public function count($classid,$where=false){
        $classid = $classid ? $classid : $this->classid;
        if($where) $param['where'][] = $where;
        $param['where'][] = 'classid='.$classid;
        return parent::countModel($param);
    }
    
    //推荐信息
    public function tuijian(array $idArr){
        $param['where'] = 'id in('.implode(',',$idArr).')';
        $data = array(
            'tuijian' =>(int)$_POST['tuijian'],
        );
        return parent::updateModel($data,$param);
    }
    
    //热门信息
    public function remen(array $idArr){
        $param['where'] = 'id in('.implode(',',$idArr).')';
        $data = array(
            'remen' =>(int)$_POST['remen'],
        );
        return parent::updateModel($data,$param);
    }
    //根据classid获取所属的所有信息id
    public function getClassidInfoid($classid){
        $this->field = array('id');
        $param['where'] = 'classid='.$classid;
        return parent::selectModel($param);
    }
    
    //根据id删除信息
    public function delete($id){
        $this->deleteInfoAndfile($id); //删除信息的附件和图片
        $this->tab = array($GLOBALS['allclass'][$this->classid]['tab']);
        $param['where'] = 'id='.$id;
        if($GLOBALS['public']['ishtml'] == 1){//删除静态文件
          $this->field = array('time');
          $time = parent::oneModel($param);
          $time = date('Ymd',$time['time']);
          $path = ROOT_PATH.$GLOBALS['allclass'][$this->classid]['classpath'].'/'.$time.'/'.$id.'.html';
          file::unLink($path);
        }
        parent::deleteModel($param); //删除主表信息
        $param['where'] = 'uid='.$id;
        $this->tab = array($this->tab[0].'_1');
        parent::deleteModel($param); //删除附表信息
        //删除专题表
        $ztModel = new ZtModel();
        $ztModel->deleteInfo($this->classid,$id);
        //删除Tags
        $tagsModel = new TagsModel();
        $tagsModel->removeInfoClass($id,$this->classid);
    }
    
    //根据信息id删除信息编辑器内的图片与附件
    public function deleteInfoAndfile($id){
        $this->tab = array($GLOBALS['allclass'][$this->classid]['tab']);
        //获取所属字段
        $fieldArr = $GLOBALS['allfield'][$this->mid];
        $editorName = array();
        foreach($fieldArr as $v){
            //筛选出编辑器字段
            if($v['ftype'] == 'editor' && $v['vice'] == 0){ 
                $editorName[1][] = $v['fname'];
            }else if($v['ftype'] == 'editor' && $v['vice'] == 1){
                $editorName[2][] = $v['fname'];
            }
        }
        if($editorName[1]){//获取主表内容
            $this->field = $editorName[1];
            $param['where'] = 'id='.$id;
            $data1 = parent::oneModel($param);
        }
        if($editorName[2]){//获取副表内容
            $this->field = $editorName[2];
            $this->tab = array($this->tab[0].'_1');
            $param['where'] = 'uid='.$id;
            $data2 = parent::oneModel($param);
        }
        $dataArr = array_merge($data1 ? $data1 : array(),$data2 ? $data2 : array());
        //遍历删除文件
        foreach($dataArr as $v){
            //筛选出内容中的文件路径
            $fileArr = string::getStringFileUrl($v);
            if($fileArr){
                foreach($fileArr as $v){
                    file::unLink(ROOT_PATH.$v);
                }
            }
        }
    }
    
    //根据classid获取前台信息列表
    public function q_listInfo($limit,$classid){
        $param['where'][] = 'classid in('.$classid.')';
        $param['order'] = 'id desc';
        $param['limit'] = $limit;
        $param['force'] = 'list';
        $this->field = array('id');
        $id = parent::selectModel($param);
        if($id){
            foreach($id as $v){
                $newid[] = $v['id'];
            }
            $param['limit'] = '';
            $this->field = array('*');
            $param['where'] = 'id in('.implode(',',$newid).')';
            return parent::selectModel($param);
        }else{
            return array();
        }
    }
    
    //根据classid获取前台信息列表总数
    public function q_listCount($classid){
        $param['where'] = 'classid in('.$classid.')';
        return parent::countModel($param);
    }
    
    //article标签调用数据
    public function article_data($num,$order,$where,$remen,$tuijian){
        $param['limit'] = $num;
        $param['order'] = $order;
        $param['force'] = 'pri';
        //获取所有子栏目字符串
        $childArr = category::getClassChild($this->classid);
        foreach($childArr as $v){
            $classid[] = $v['classid'];
        }
        $classid = array_merge(array($this->classid),$classid ? $classid : array());
        $classid = implode(',',$classid);
        $param['where'][] = 'classid in('.$classid.')';;
        if($where) $param['where'][] = $where;
        if($remen) $param['where'][] = 'remen='.$remen;
        if($tuijian) $param['where'][] = 'tuijian='.$tuijian;
	$data = parent::selectModel($param);
        //赋值url和其他变量
        foreach($data as $v){
            $param['type'] = 'content';
            $param['classid'] = $v['classid'];
            $param['classpath'] = $GLOBALS['allclass'][$v['classid']]['classpath'];
            $param['time'] = $v['time'];
            $param['id'] = $v['id'];
            $v['classname'] = $GLOBALS['allclass'][$v['classid']]['classname'];
            $v['url'] = $v['url'] ? $v['url'] : url($param);
            $v['classurl'] = classurl($v['classid']);
            $v['classimage'] = $GLOBALS['allclass'][$v['classid']]['images'];
            $v['mname'] = $GLOBALS['allclass'][$v['classid']]['mname'];
            $v['mid'] = $GLOBALS['allclass'][$v['classid']]['mid'];
            $uid = $GLOBALS['allclass'][$v['classid']]['uid'];
            $v['parent_classid'] = $uid;
            $v['parent_classname'] = $GLOBALS['allclass'][$uid]['classname'];
            $v['parent_classimage'] = $GLOBALS['allclass'][$uid]['images'];
            $v['parent_classurl'] = classurl($uid);
            $newData[] = $v;
        }
        return $newData;
    }
    
    
    //查询内容的点击次数并且+1
    public function click($id,$classid){
        $param['where'][] = 'id='.$id;
        $param['where'][] = 'classid='.$classid;
        parent::queryModel("update ".DB_PRE.$this->tab[0]." set click=click+1 where id=$id and classid=$classid");
        $this->field = array('click');
        $num = parent::oneModel($param);
        return $num;
    }
    
    //根据内容id获取上一个和下一个数据
    public function prevData($id,$type=false,$classid=false,$tab=false){
        if($classid) $this->classid = $classid;
        if($tab) $this->tab = $tab;
        if($type == 'prev'){
            $param['where'][] = 'id < '.$id;
            $param['order'] = 'id desc';
        }else if($type == 'next'){
            $param['where'][] = 'id > '.$id;
            $param['order'] = 'id asc';
        }else{
            return;
        }
        $param['where'][] = 'classid='.$this->classid;
        $param['ignore'] = 'classid';
        $data = parent::oneModel($param);
        if(!$data){
            $data['title'] = '没有了';
            $data['url'] = classurl($this->classid);
        }else{
            $url['type'] = 'content';
            $url['classid'] = $data['classid'];
            $url['classpath'] = $GLOBALS['allclass'][$data['classid']]['classpath'];
            $url['time'] = $data['time'];
            $url['id'] = $data['id'];
            $data['url'] = $data['url'] ? $data['url'] : url($url);
        }
        return $data;
    }
    //随机获取信息标签返回数据
    public function randData($num,$classid,$id,$isclassid){
        $countid = false;
        if($id) $countid = 'id!='.$id;
        //获取数量
        $count = $this->count($this->classid,$countid);
        if($count <= 0) return array();
        //获取最大id
        $maxNum = parent::sqlModel("select max(id) as max from ".DB_PRE.$this->tab[0]."");
        $maxNum = $maxNum[0]['max'];
        //获取最小id
        $minNum = parent::sqlModel("select min(id) as min from ".DB_PRE.$this->tab[0]."");
        $minNum = $minNum[0]['min'];
        if($count < $num) $num = $count;
        $newData = array();
        while(true){
            $param = array();
            $newData = array_filter($newData); //去除空数据
            if(count($newData) >= $num){
                //赋值
                return info2var($newData);
                break;
            }
            if($id) $param['where'][] = 'id != '.$id;
            if($isclassid) $param['where'][] = 'classid = '.$classid;
            $param['where'][] = 'id >= '.rand($minNum,$maxNum);
            $param['order'] = 'id asc';
            $data = parent::oneModel($param);
            if($data){
                $newData[$data['id']] = $data;
            }
        }
    }
}
?>