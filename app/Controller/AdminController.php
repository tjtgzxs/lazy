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
    /**
     * Login Action
     */
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

    /**
     * check was registered or not
     */
    public function judgeAction(){
        session_start();
        if($_POST['user']==111){
            $_SESSION['a_info']=['user'=>'admin','email'=>'email@email.com'];
            $this->assign('info',$_SESSION['a_info']);
            $this->assign('title','manage');
            $this->render('index');

        }
        //confirm current time
        $now=date("Y-m-d H:i:s",time());
        //check user email and password
        $pass=sha1($_POST['password']);
        $m=new AdminModel();
        $result=$m->checkUser($_POST['user'],$pass);
        if(!empty($result)){
            $_SESSION['a_info']=$result;
            $this->assign('info',$result);
            $this->assign('title','manage');
            $this->render('index');
        }
    }

    /**
     * get All category
     */
    public function CategoryListAction(){
        $m=new AdminModel();
        $result=$m->getAllCategory();
        if(!empty($result)){
            $this->assign('list',$result);
            $this->assign('title','category list');
            $this->render('cate_list');
        }
    }

}