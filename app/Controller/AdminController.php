<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 14:37
 */

namespace Controller;
use Lazy\BaseController;
use Model\AdminModel;
class AdminController extends BaseController
{
    public function LoginAction(){
        session_start();
        if(!empty($_SESSION['a_info'])){
            $this->assign('info',$_SESSION['a_info']);
            $this->assign('title','manage');
            $this->render('index');
        }
        $this->assign('title','Log In');
        $this->render();
    }
    public function judgeAction(){
        //confirm current time
        $now=date("Y-m-d H:i:s",time());
        //check user email and password
        $pass=sha1($_POST['password']);
        $m=new AdminModel();
        $result=$m->checkUser($_POST['user'],$pass);
        if(!empty($result)){
            session_start();
            $_SESSION['a_info']=$result;
            $this->assign('info',$result);
            $this->assign('title','manage');
            $this->render('index');
        }
    }

}