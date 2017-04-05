<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   前台专题控制器
 */
defined('LMXCMS') or exit();
class IndexAction extends HomeAction{
    private $id;
    private $ztModel = null;
    public function __construct() {
        parent::__construct();
        $this->id = (int)$_GET['id'];
        if($this->id <= 0){ 
            _404();
        }
        if($this->ztModel == null){
            $this->ztModel = new ZtModel();
        }
        if(!$this->ztModel->is_zt($this->id)){
            _404();
        }
    }
    
    public function index(){
        $temModel = new parse($this->smarty);
        echo $temModel->zt($this->id,$this->ztModel);
    }
}
?>