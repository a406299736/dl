<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   执行sql语句
 */
defined('LMXCMS') or exit();
class SqlModel extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function sql($sqlstr){
        $sqlstr = str_replace('[-pre-]',DB_PRE,$sqlstr);
        $sqlstr = string::stripslashes($sqlstr);
        $sql = '';
        foreach(explode("\n",$sqlstr) as $v){
            if(preg_match('/\;$/',trim($v))){
                $sql .= $v;
                parent::queryModel($sql);
                $sql = '';
            }else{
                $sql .= $v;
            }
        }
    }
}
?>