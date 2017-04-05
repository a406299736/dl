<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   前台内容页面控制器
 */
defined('LMXCMS') or exit();
class ContentAction extends HomeAction{
    private $classid;
    private $id;
    private $contentModel = null;
    public function __construct(){
        parent::__construct();
        $this->classid = (int)$_POST['classid'] ? (int)$_POST['classid'] : (int)$_GET['classid'];
        $this->id = (int)$_POST['id'] ? (int)$_POST['id'] : (int)$_GET['id'];
        if(!$this->classid || !isset($GLOBALS['allclass'][$this->classid]) || !$this->id){
            _404();
        }
        $this->contentModel = new ContentModel($this->classid);
        if(!$this->contentModel->is_info($this->id)){
            _404();
        }
    }
    
    public function index(){
        $temModel = new parse($this->smarty);
        echo $temModel->contents($this->id,$this->classid,$this->contentModel);
    }
		
    //内容点击次数显示及统计
    public function clicknnum(){
        $num = $this->contentModel->click($this->id,$this->classid);
        echo "document.write('".$num['click']."');";
    }
}
?>