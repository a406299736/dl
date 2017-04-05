<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   采集数据模块
 */
defined('LMXCMS') or exit();
class AcquisiModel extends Model{
    public function __construct(){
        parent::__construct();
        $this->tab = array('cj');
    }
    
    //创建节点
    public function add($data){
        return parent::addModel($data);
    }
    
    //获取节点数据
    public function getData($limit){
        $param['limit'] = $limit;
        $param['order'] = 'id desc';
        return parent::selectModel($param);
    }
    
    //返回节点全部数据
    public function count(){
        $this->jd_tab();
        return parent::countModel($param);
    }
    //删除已经入库的信息
    public function delete_is_inMysql(){
        $this->cj_data_tab();
        $param['where'] = 'is_in = 1';
        return parent::deleteModel($param);
    }
    
    //根据id数组批量删除采集数据
    public function more_delete_cjdata(array $id){
        $this->cj_data_tab();
        $param['where'] = 'id in('.implode(',',$id).')';
        return parent::deleteModel($param);
    }
    
    //根据id返回一条节点数据
    public function getOne($id){
        $this->jd_tab();
        $param['where'] = 'id='.$id;
        return parent::oneModel($param);
    }
    
    //根据id修改节点
    public function update($data,$id){
        $this->jd_tab();
        $param['where'] = 'id='.$id;
        parent::updateModel($data,$param);
    }
    
    //根据节点id返回采集列表
    public function cj_list($id,$limit){
        $this->cj_list_tab();
        $param['where'] = 'uid='.$id;
        $param['limit'] = $limit;
        $param['order'] = 'lid desc';
        return parent::selectModel($param);
    }
    
    //根据lid返回未入库的采集数据id
    public function not_inMysql_id($limit,$lid){
        $this->cj_data_tab();
        $this->field = array('id');
        $param['where'][] = 'lid='.$lid;
        $param['where'][] = 'is_in = 0';
        $param['limit'] = $limit;
        $param['order'] = 'id desc';
        return parent::selectModel($param);
    }
    //根据lid返回未入库的采集数量
    public function not_inMysql_count($lid){
        $this->cj_data_tab();
        $param['where'][] = 'lid='.$lid;
        $param['where'][] = 'is_in = 0';
        return parent::countModel($param);
    }
    
    //根据采集lid返回一条采集规则数据
    public function getOneCjData($id){
        $this->cj_list_tab();
        $param['where'] = 'lid='.$id;
        return $this->formatData(parent::oneModel($param));
    }
    //根据id修改采集数据
    public function updateCaijiData($id,$data){
        $this->cj_data_tab();
        $data = addslashes($data);
        $param['where'] = 'id='.$id;
        $newData['data'] = $data;
        parent::updateModel($newData,$param);
    }
    
    //根据id修改采集规则
    public function updateCjData($id,$data){
        $this->cj_list_tab();
        $param['where'] = 'lid='.$id;
        return parent::updateModel($data,$param);
    }
    
    //根据id入库一条采集数据
    public function in_mysql_one($curl,$id,$classid){
        //判断是否已经入库
        if($this->is_in_mysql($id)) return;
        //判断数据是否存在
        if(!$this->is_cj_data($id)) return;
        if(!$GLOBALS['allclass'][$classid]) return;
        $this->cj_data_tab();
        $param['where'] = 'id='.$id;
        $data = parent::oneModel($param);
        eval('$newData='.$data['data'].';');
        $mid = $GLOBALS['allclass'][$classid]['mid'];
        $classpath = $GLOBALS['allclass'][$classid]['classpath'];
        $field = $GLOBALS['allfield'][$mid];
        $field = tool::arrV2K($field,'fname');
        //数据赋值
        $contentData[1]['title'] = trim($newData['title']);
        $contentData[1]['keywords'] = trim($newData['keywords']);
        $contentData[1]['description'] = trim($newData['description']);
        $contentData[1]['remen'] = 0;
        $contentData[1]['tuijian'] = 0;
        $contentData[1]['url'] = '';
        $contentData[1]['ztid'] = trim($newData['ztid']);
        $contentData[1]['ztid2'] = '';
        $contentData[1]['tagsname'] = trim($newData['tagsname']);
        $contentData[1]['tagsname2'] = '';
        $contentData[1]['classid'] = $classid;
        global $config;
        $contentData[1]['click'] = rand($config['clickMax'][0],$config['clickMax'][1]);
        $contentData['tab'] = $GLOBALS['allclass'][$classid]['tab'];
        $this->cj_list_tab();
        $param['where'] = 'lid='.$data['lid'];
        $regularData = parent::oneModel($param);
        eval('$regularArray='.$regularData['array'].';');
        //处理时间
        $contentData[1]['time'] = $regularArray['time']['str'] ? strtotime($regularArray['time']['str']) : time();
        //处理图片数据
        foreach($regularArray as $k => $v){
            //过滤掉不保存本地的图片
            if($v['is_bendi']){
                $bendiField[] = $k;
                //取出缩略图字段
                if($v['is_small']){
                    $smallField[$k]['width'] = $v['small_width'] ? $v['small_width'] : $GLOBALS['public']['small_width'];
                    $smallField[$k]['height'] = $v['small_height'] ? $v['small_height'] : $GLOBALS['public']['small_height'];
                    $smallField[$k]['bili'] = $v['small_bili'] ? true : false;
                }
                //出去要限制宽度的图片
                if($v['is_maxWidth']){
                    $maxWidthField[$k] = $v['maxWidth'];
                }
                //取出加水印的图片
                if($v['water']){
                    $waterField[] = $k;
                }
                //取出裁剪的图片
                if($v['is_cutting']){
                    $cuttingField[$k] = $v['cutting_px'];
                }
            }
            //取出编辑中图片保存本地的字段
            if($v['is_editimg_bendi']){
                $editorImg[] = $k;
            }
        }
        //处理编辑器中的保存本地的图片
        if($editorImg){
            foreach($editorImg as $v){
                if(!$newData[$v]) continue;
                //取出内容中的图片
                preg_match_all('/<img[^>]*src=[\'\"]*?([^\'\"]*?)[\'\"]*?[^>]*>/Ui',$newData[$v],$editImgUrl);
                if($editImgUrl[1]){
                    $editorDomain = getDomain($data['url']); //获取图片的域名部分
                    //保存图片的绝对地址
                    $jd_imgUrl = ROOT_PATH.'file/d/'.$classpath.'/'.date('Ymd').'/';
                    if(!is_dir($jd_imgUrl)){ //创建文件夹
                        if(!mkdir($jd_imgUrl,0777,true)){
                            exit('创建目录失败，请检测'.$jd_imgUrl.'目录权限');
                        }
                    }
                    foreach($editImgUrl[1] as $url){
                        //记录源地址
                        $y_url[] = $url;
                        $url = addHost($url,$editorDomain); //图片转换绝对地址
                        $imgname = date('YmdHis').rand(1000,9999); //图片新名称
                        //开始下载图片
                        rewrite::speed('下载【'.$url.'】远程图片中...');
                        $newImgUrl = $curl->downImg($url,$jd_imgUrl.$imgname);
                        $n_url[] = '/'.trim($newImgUrl,'/'); //记录新地址
                    }
                    //替换内容中的旧图片地址为新图片地址
                    if($y_url && $n_url){
                        $newData[$v] = str_replace($y_url,$n_url,$newData[$v]);
                    }
                }
            }
        }
        if($bendiField){
            $imgPath = ROOT_PATH.'file/d/'.$classpath.'/'.date('Ymd').'/';
            if(!is_dir($imgPath)){ //创建文件夹
                if(!mkdir($imgPath,0777,true)){
                    exit('创建目录失败，请检测'.$imgPath.'目录权限');
                }
            }
            $fileModel = new FileModel();
            //保存图片到本地
            foreach($bendiField as $v){
                $downImgUrl = array();
                $imgArr = explode('#####',$newData[$v]);
                $imgArr = array_filter($imgArr,'removeArraySpace');
                if($imgArr){
                    foreach($imgArr as $k=>$url){
                        $imgname = date('YmdHis').rand(1000,9999);
                        rewrite::speed('下载【'.$url.'】远程图片中...');
                        if($newImgUrl = $curl->downImg($url,$imgPath.$imgname)){
                            $newImgUrl = '/'.trim($newImgUrl,'/');
                            //把图片加到数据库
                            $imgInfo = pathinfo($newImgUrl);
                            $file['filename'] = $imgInfo['basename'];
                            $file['name'] = $k.'.jpg';
                            $file['url'] = $newImgUrl;
                            $file['size'] = filesize(ROOT_PATH.trim($newImgUrl,'/'));
                            $file['issmall'] = 0;
                            $fileModel->add($file,0);
                            $downImgUrl[] = $newImgUrl;
                        }
                    }
                    $newData[$v] = implode('#####',$downImgUrl);
                }
            }
            //限制图片最大宽度
            if($maxWidthField){
                rewrite::speed('改变图片的最大宽度中...');
                foreach($maxWidthField as $k => $v){
                    if($v <=0 ) continue;
                    $imgArr = explode('#####',$newData[$k]);
                    $imgArr = array_filter($imgArr,'removeArraySpace');
                    if($imgArr){
                        foreach($imgArr as $i){
                            image::imageMaxWidth(ROOT_PATH.trim($i,'/'),$v);
                        }
                    }
                }
            }
            //裁剪图片
            if($cuttingField){
                rewrite::speed('裁剪图片中...');
                foreach($cuttingField as $k=>$v){
                    if($v <=0 ) continue;
                    $imgArr = explode('#####',$newData[$k]);
                    $imgArr = array_filter($imgArr,'removeArraySpace');
                    if($imgArr){
                        foreach($imgArr as $i){
                            image::cutting(ROOT_PATH.trim($i,'/'),$v);
                        }
                    }
                }
            }
            //生成缩略图
            if($smallField){
                rewrite::speed('生成缩略图中...');
                foreach($smallField as $k => $v){
                    $imgArr = explode('#####',$newData[$k]);
                    $imgArr = array_filter($imgArr,'removeArraySpace');
                    if($imgArr){
                        foreach($imgArr as $i=>$url){
                            $smallUrl = ROOT_PATH.'/'.trim($url,'/');
                            if(!is_file($smallUrl)) continue;
                            image::smallImage($smallUrl,$v['width'],$v['height'],$v['bili']);
                            //增加图片到数据库
                            $imgInfo = pathinfo($url);
                            $file['filename'] = 'small_'.$imgInfo['basename'];
                            $file['name'] = $i.'.jpg';
                            $file['url'] = $imgInfo['dirname'].'/small_'.$imgInfo['basename'];
                            $file['size'] = filesize($smallUrl);
                            $file['issmall'] = 1;
                            $fileModel->add($file,0);
                            if($field[$k]['ftype'] == 'image'){
                                //如果是单图片 删除大图片，返回缩略图路径
                                $newData[$k] = $imgInfo['dirname'].'/small_'.$imgInfo['basename'];
                                $fileModel->deleteName(trim($url,'/'));
                            }
                        }
                    }
                }
            }
            //加水印
            if($waterField){
                rewrite::speed('正在给图片加水印...');
                foreach($waterField as $v){
                    $imgArr = explode('#####',$newData[$v]);
                    $imgArr = array_filter($imgArr,'removeArraySpace');
                    if($imgArr){
                        foreach($imgArr as $url){
                            $url = ROOT_PATH.'/'.trim($url,'/');
                            if(!is_file($url)) continue;
                            image::addWater($url,ROOT_PATH.trim($GLOBALS['public']['markImg'],'/'));
                        }
                    }
                }
            }
        }
        //数据处理
        foreach($field as $v){
            $value = $newData[$v['fname']] ? $newData[$v['fname']] : '';
            if($v['vice']){
                $contentData[2][$v['fname']] = addslashes($value);
            }else{
                $contentData[1][$v['fname']] = addslashes($value);
            }
        }
        rewrite::speed('【id：'.$id.'】数据入库中...');
        //把数据增加到数据表
        $contentModel = new ContentModel($classid);
        $contentModel->add($contentData);
        //修改入库状态
        $this->in_mysql_on($id);
    }
    
    //修改为已入库状态
    private function in_mysql_on($id){
        $this->cj_data_tab();
        $param['where'] = 'id='.$id;
        $data['is_in'] = 1;
        parent::updateModel($data,$param);
    }
    
    //查询是否已经入库
    private function is_in_mysql($id){
        $this->cj_data_tab();
        $param['where'][] = 'id='.$id;
        $param['where'][] = 'is_in=1';
        return parent::countModel($param);
    }
    //根据id查看采集数据是否存在
    private function is_cj_data($id){
        $this->cj_data_tab();
        $param['where'] = 'id='.$id;
        return parent::countModel($param);
    }
    
    //初始化数据库返回的数据
    private function formatData($data){
        $arr = '';
        if($data['array']){
            $arr = string::stripslashes($data['array']);
            eval('$arr='.$arr.';');
        }
        $remove_html = '';
        if($data['remove_html']){
            $remove_html = string::stripslashes($data['remove_html']);
            eval('$remove = '.$remove_html.';');
        }
        $data['array'] = $arr;
        $data['remove_html'] = $remove;
        return $data;
    }
    
    //根据节点id返回采集总数量
    public function cj_count($id){
        $this->cj_list_tab();
        $param['where'] = 'uid = '.$id;
        return parent::countModel($param);
    }
    
    //根据采集id获取采集规则和节点数据并初始化
    public function caijiData($lid){
        $this->join=array(
            'fromTab' => 'cj_list',
            'field' => array(
                'cj_list' => array('*'),
                'cj' => array('name','mid','id'),
            ),
            'on' => array(
                array('LEFT','cj','cj.id [=] cj_list.uid'),
            ),
        );
        $param['where'] = 'lid = '.$lid;
        $data = parent::joinModel($param);
        return $this->formatData($data[0]);
    }
    
    //根据id返回一条采集数据
    public function caijiDataOne($id){
        $this->cj_data_tab();
        $param['where'] = 'id='.$id;
        return parent::oneModel($param);
    }
    //增加内容页面url
    public function addContentUrl($url,$lid){
        $this->cj_url_tab();
        $data['urlmd5'] = md5($url);
        $data['time'] = time();
        $data['lid'] = $lid;
        return parent::addModel($data);
    }
    //根据url查询地址库中是否存在
    public function is_caiji_url($url){
        $this->cj_url_tab();
        $param['where'] = "urlmd5 = '".md5($url)."'";
        return parent::countModel($param);
    }
    
    //增加采集数据
    public function addCaijiData($data){
        $this->cj_data_tab();
        $data['data'] = var_export($data['data'],true);
        $data['data'] = addslashes($data['data']);
        $data['time'] = time();
        $data['is_in'] = 0;
        return parent::addModel($data);
    }
    
    //创建采集
    public function addCj($data){
        $this->cj_list_tab();
        return parent::addModel($data);
    }
    
    //根据采集id返回采集数据列表
    public function caijiDataList($limit,$lid){
        $this->cj_data_tab();
        $param['limit'] = $limit;
        $param['order'] = 'id desc';
        $param['where'] = 'lid='.$lid;
        return parent::selectModel($param);
    }
    
    //根据节点id返回所有采集规则id
    public function jd2cjId($id){
        $this->cj_list_tab();
        $this->field = array('lid');
        $param['where'] = 'uid='.$id;
        return parent::selectModel($param);
    }
    
    //根据采集id删除所有采集数据
    public function delete_cjid_data($lid){
        $this->cj_data_tab();
        $param['where'] = 'lid = '.$lid;
        return parent::deleteModel($param);
    }
    
    //根据节点id删除采集规则
    public function delete_cj_list($uid){
        $this->cj_list_tab();
        $param['where'] = 'uid='.$uid;
        return parent::deleteModel($param);
    }
    //根据规则id清空网址库
    public function delete_list_url($lid){
        $this->cj_url_tab();
        $param['where'] = 'lid='.$lid;
        return parent::deleteModel($param);
    }


    //根据规则id删除规则
    public function delete_cj_regular($lid){
        $this->cj_list_tab();
        $param['where'] = 'lid='.$lid;
        return parent::deleteModel($param);
    }
    
    //根据id删除节点
    public function delete_jd_data($id){
        $this->jd_tab();
        $param['where'] = 'id='.$id;
        return parent::deleteModel($param);
    }
    
    //根据采集id返回采集数量总数量
    public function caijiDataCount($lid){
        $this->cj_data_tab();
        $param['where'] = 'lid='.$lid;
        return parent::countModel($param);
    }
    
    //根据id删除采集数据
    public function delete_cj_data($id){
        $this->cj_data_tab();
        $param['where'] = 'id='.$id;
        parent::deleteModel($param);
    }
    
    //节点表
    public function jd_tab(){
        $this->tab = array('cj');
    }
    //数据表
    public function cj_data_tab(){
        $this->tab = array('cj_data');
    }
    //采集表
    public function cj_list_tab(){
        $this->tab = array('cj_list');
    }
    //地址库表
    public function cj_url_tab(){
        $this->tab = array('cj_url');
    }
    
}
?>