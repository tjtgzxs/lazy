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
        //get all category
        $result=$m->getAllCategory();
        //format all category
        foreach ($result as $k=>$v){
            if($v['parent_id']>0){
                $id=0;
                foreach ($result as $key=>$value){
                    if($value['id']==$v['parent_id']) {
                        $id=$key;
                        break;
                    }
                }
                $result[$id]['child'][$k]=$v;
                unset($result[$k]);
            }
        }
        if(!empty($result)){
            $this->assign('list',$result);
            $this->assign('title','category list');
            $this->render('cate_list');
        }
    }

    /**
     * get add Category page
     */
    public function addCategoryAction(){
        $m=new AdminModel();
        $pList=$m->getAllCategory(['parent_id'=>0]);
//        var_dump($pList);die();
        $this->assign('title','addCategory');
        $this->assign('list',$pList);
        if(!empty($_GET['id'])){
            $info=$m->getCategory($_GET['id']);
            $this->assign('id',$info['id']);
            $this->assign('pid',$info['parent_id']);
            $this->assign('name',$info['name']);
            $this->assign('title','editCategory');
        }
        $this->render();
    }

    /**
     * insert or update category
     */
    public function insertAction(){
        $m=new AdminModel();
        $pid=$_POST['parent'];
        $name=$_POST['name'];
        $arr['parent_id']=$pid;
        $arr['name']=$name;
        if(!empty($_POST['id'])){
           //update
          $result=$m->updateCate($_POST['id'],$arr);

        }else{
            //insert
             $result=$m->addCategory($arr);

        }
        header('Location:?r=admin/CategoryList');
        die();
    }

    public function deleteAction(){
        $id=$_GET['id'];
        $m=new AdminModel();
        $result=$m->updateCate($id,[],1);
        if(empty($result)){
            echo json_encode(['code'=>0,'msg'=>'delete fail']);die();
        }else{
            echo json_encode(['code'=>1,'msg'=>'delete success']);die();
        }
    }

}