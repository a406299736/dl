<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   Tags控制器
 */
defined('LMXCMS') or exit();
class TagsAction extends HomeAction{
    private $data;
    private $tagsModel = null;
    public function __construct() {
        parent::__construct();
        $data = p(2,1,1);
        $name = string::delHtml($data['name']);
        if(!$name) _404();
        $name = urldecode($name);
        if($this->tagsModel == null) $this->tagsModel = new TagsModel();
        $this->data = $this->tagsModel->getNameData($name);
        if(!$this->data) _404();
    }
    
    public function index(){
        $temModel = new parse($this->smarty,$this->config);
        echo $temModel->tags($this->data,$this->tagsModel);
    }
}
?>