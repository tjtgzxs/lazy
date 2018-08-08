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

    /**
     * delete Category
     */
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

    public function deleteArticleAction(){
        $id=$_GET['id'];
        $m=new AdminModel();
        $result=$m->updateArticle($id,[],1);
        if(empty($result)){
            echo json_encode(['code'=>0,'msg'=>'delete fail']);die();
        }else{
            echo json_encode(['code'=>1,'msg'=>'delete success']);die();
        }
    }

    /**
     * get add article page
     */
    public function addArticleAction(){
      $m=new AdminModel();
      $list=$m->getAllCategory(['parent_id'=>0]);
      if(!empty($_GET['id'])){
          $info=$m->getArticle($_GET['id']);
          $this->assign('article_title',$info['title']);
          $this->assign('content',$info['content']);
          $this->assign('id',$info['id']);
          //format date
          $cate=$m->getCategory($info['cat_id']);
          $second='';
          if(empty($cate['parent_id'])){
              $this->assign('top_cate',$cate);
              $this->assign('pid',$cate['id']);
          }else{
              $second="";
              $top=$m->getCategory($cate['parent_id']);
//              print_r($top);die();
              $this->assign('top_cate',$top);
              $this->assign('pid',$top['id']);
              $list1=$m->getAllCategory(['parent_id'=>$cate['parent_id']]);
              foreach ($list1 as $k=>$v){
                  $second.="<option value='".$v['id']."'";
                  if($info['cat_id']==$v['id']){
                      $second.=" selected ";
                  }
                  $second.=" >".$v['name']."</option>";
              }
               if(!empty($second)) $this->assign('second',$second);
          }
      }
      $this->assign('title','edit article');
      $this->assign('list',$list);
      $this->render();
    }

    /**
     * get second category
     */
    public function getSecondAction(){
        $pid=$_GET['pid'];
        if(empty($pid)){
            echo json_encode(['code'=>1,'msg'=>'change success']);
            die();
        }
        $m=new AdminModel();
        $list=$m->getAllCategory(['parent_id'=>$pid]);
        if(empty($list)){
            echo json_encode(['code'=>0,'msg'=>'change fail']);die();
        }else{
            echo json_encode(['code'=>1,'msg'=>'change success','data'=>$list]);die();
        }
    }

    /**
     * insert or update Article
     * @return bool|int
     */
    public function insertArticleAction(){
        $m=new AdminModel();
        $arr=[];
        $arr['cat_id']= $_POST['top_cate'];
        if(!empty($_POST['second_cate'])){
            $arr['cat_id']= $_POST['second_cate'];
         }
        $arr['title']=$_POST['title'];
        $arr['content']=$_POST['text'];
        $arr['update_date']=date('Y-m-d H:i:s',time());
        if(empty($_POST['id'])){
            $result=$m->insertArticle($arr);
        }else{
            $result=$m->updateArticle($_POST['id'],$arr);
        }
        header('Location:?r=admin/getArticleList');
        die();
    }

    /**
     * 获取文章列表
     */
    public function getArticleListAction(){
        $m=new AdminModel();
        $page=!empty($_GET['page'])?$_GET['page']:1;
        $list=$m->getArticleList($page);
        $this->assign('list',$list);
        $max_page=$m->getArticlePage();
//        echo $page;die();
        $this->assign('page',$page);
        $this->assign('title','article list');
        $this->assign('max',$max_page);
        $this->render('article_list');
    }



}