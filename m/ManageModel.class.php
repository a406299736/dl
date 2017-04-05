<?php 
/**
 *  【梦想cms】 http://www.lmxcms.com
 * 
 *   管理员模块
 */
defined('LMXCMS') or exit();
class ManageModel extends Model{
    public function __construct() {
        parent::__construct();
        $this->field=array('id','currtime','currip','name','pwd','lasttime','lastip','num','errortime');
        $this->tab = array('user');
    }
    //修改登录错误次数为0
    public function removeErrorNum($name){
        $param['where'] = "name='$name'";
        $data['num'] = 0;
        parent::updateModel($data,$param);
    }
    
    //登录验证并保存登录状态
    public function LoginData($userData,$data){
        if(md5($data['name'].string::pwdmd5($data['pwd'])) != md5($userData['name'].$userData['pwd'])){
            //填写登录错误次数和错误时间
            parent::queryModel("update ".DB_PRE."user set num=num+1,errortime=".time()." where id=".$userData['id']."");
            return false;
        }
        $login_Info = array(
            'currtime' => time(), //本次登录时间
            'currip' => getip(),  //本次登录ip
            'lasttime' => $userData['currtime'], //最后登录时间
            'lastip' => $userData['currip'],//最后登录ip
            'name' => $userData['name'],
            'num' => 0,
        );
        $this->setManageInfo($login_Info);
        $sess_username = encrypt($userData['name'],'E',$GLOBALS['public']['user_pwd_key']);
        //保存登录日志
        $this->addUserLog($login_Info['name'],$login_Info['currip'],$login_Info['currtime']);
        //存储session和登录标识状态
        session('username',$sess_username);
        session('pwd',$userData['pwd']);
        session('time',time());
        session('userKey',string::pwdmd5($sess_username.$userData['pwd']));
        //设置帐号登录标记
//        $rand = rand(100000,999999);
//        $login_mark = encrypt($rand,'E',$GLOBALS['public']['user_pwd_key']);
//        setcookie('login_mark',$login_mark);
//        $GLOBALS['public']['login_mark'] = $rand;
//        f('public/conf',$GLOBALS['public'],true);
        return true;
    }
    
    //根据用户名验证管理员获取数据
    public function getNameUserData($name){
        $param['where'] = "name='$name'";
        return parent::oneModel($param);
    }
    
    //更新保存管理员本次登录信息
    public function setManageInfo($login_Info){
         $param['where'] = "name='".$login_Info['name']."'";
         unset($login_Info['name']);
         parent::updateModel($login_Info,$param);
    }
    
    //获取所有管理员
    public function getAllData(){
        $param['order'] = 'id desc';
        return parent::selectModel($param);
    }
    
    //增加管理员
    public function addManang($data){
        $pwd=string::pwdmd5($data['pwd']);
        $data=array(
            'name' => $data['name'],
            'pwd'  => $pwd,
            'currtime' => time(),
            'currip' => getip(),
            'lasttime' => time(),
            'lastip' => getip(),
            'num' => 0,
            'errortime' => 0,
            'num1' => 0,
            'errortime1' => 0,
        );
        return parent::addModel($data);
    }
    
    //根据用户验证用户是否存在
    public function isName($name){
        $param['where'] = "name='$name'";
        return parent::countModel($param);
    }
    
    //根据id获取管理员数据
    public function getIdUserData($id){
        $param['where'] = "id=$id";
        return parent::oneModel($param);
    }
    
    //根据id修改管理员
    public function updateUser($data){
        $param['where'] = "id=".$data['id']."";
        $arr['name'] = $data['name'];
        $arr['pwd'] = string::pwdmd5($data['pwd']);
        return parent::updateModel($arr,$param);
    }
    
    //根据id删除管理员
    public function delManage($id){
        $param=array(
            'where' => array(
                'id='.$id,
            ),
        );
        return parent::deleteModel($param);
    }
    //查询管理员数量
    public function getUserCount(){
        return parent::countModel();
    }
    
    //用户登录日志表
    private function logTab(){
        $this->tab = array('userlog');
        $this->field = array('*');
    }
    
    //增加登录日志
    private function addUserLog($name,$ip,$time){
        $this->logTab();
        $data['name'] = $name;
        $data['time'] = $time;
        $data['ip'] = $ip;
        return parent::addModel($data);
    }
    
    //获取登录日志列表
    public function getUserLog($limit){
        $this->logTab();
        $param['limit'] = $limit;
        $param['order'] = 'id desc';
        return parent::selectModel($param);
    }
    
    //登录日志数量
    public function getUserLogCount(){
        $this->logTab();
        return parent::countModel();
    }
    
    //清除七天外的所有登录日志
    public function deleteLog(){
        $this->logTab();
        $time = time() - (7 * 24 * 3600);
        $param['where'] = 'time < '.$time;
        parent::deleteModel($param);
    }
}
?>