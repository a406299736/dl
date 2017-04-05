<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   数据库备份模块
 */
defined('LMXCMS') or exit();
class BackdbModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    //查询数据库中所有表
    public function ShowTable(){
        $data = parent::sqlModel('SHOW TABLES');
        //格式化
        foreach($data as $v){
            foreach($v as $i){
                $newData[] = $i;
            }
        }
        return $newData;
    }
    
    //查询数据表结构
    public function getTableCom($tabname){
        return parent::sqlModel('SHOW CREATE TABLE '.DB_PRE.$tabname);
    }
    
    //返回数据表信息
    public function getData($tabname,$limit){
        $this->tab = array($tabname);
        $this->field = array('*');
        $param['limit'] = $limit;
        return parent::selectModel($param);
    }
    
    //返回数据表的信息数量
    public function getCount($tabname){
        $this->tab = array($tabname);
        return parent::countModel();
    }
    
    //执行sql语句
    public function backSql($sql){
        return parent::queryModel($sql);
    }
}
?>