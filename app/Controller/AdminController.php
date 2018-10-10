<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 14:37
 */

namespace Controller;
use Lazy\BaseController;
use Lazy\CommonFunction;
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
        if(!empty($_SESSION['a_info'])){
            $this->assign('info',$_SESSION['a_info']);
            $this->assign('title','manage');
            $this->render('index');
        }
//        if($_POST['user']==111){
//            $_SESSION['a_info']=['user'=>'admin','email'=>'email@email.com'];
//            $this->assign('info',$_SESSION['a_info']);
//            $this->assign('title','manage');
//            $this->render('index');
//        }
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
        }else{
            $this->assign('errors',['wrong password or username']);
            $this->assign('title','Log In');
            $this->render('login');
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

        if(!empty($result)){
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
            $this->assign('list',$result);
            $this->assign('title','category list');
            $this->render('cate_list');
        }
        $this->assign('title','category list');
        $this->render('cate_list');
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
            $this->assign('img_url',$info['img_url']);
            $this->assign('is_show',$info['is_show']);
        }
        $this->render('addCategory');
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
        $arr['img_url']=$_POST['file'];
        $arr['is_show']=$_POST['show'];
        if(!empty($_POST['id'])){
           //update
//          $result=$m->updateCate($_POST['id'],$arr);
            $result=$m->updateTable('lazy_cate',$_POST['id'],$arr);
        }else{
            //insert
             $result=$m->addCategory($arr);

        }
        $this->delete();
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
            $this->delete();
            echo json_encode(['code'=>1,'msg'=>'delete success']);die();
        }
    }

    /**
     * delete article action
     */
    public function deleteArticleAction(){
        $id=$_GET['id'];
        $m=new AdminModel();
        $result=$m->updateArticle($id,[],1);
        if(empty($result)){
            echo json_encode(['code'=>0,'msg'=>'delete fail']);die();
        }else{
            $this->delete();
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
          $this->assign('img_url',$info['img_url']);
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
      $this->render('addArticle');
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
         echo json_encode(['code'=>1,'msg'=>'change success','data'=>$list]);die();
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
        $arr['img_url']=$_POST['file'];
        if(empty($_POST['id'])){
//            $result=$m->insertArticle($arr);
            $result=$m->insert('lazy_article',$arr);
        }else{
//            $result=$m->updateArticle($_POST['id'],$arr);
            $result=$m->updateTable('lazy_article',$_POST['id'],$arr);
        }
        $this->delete();
        header('Location:?r=admin/getArticleList');
        die();
    }

    /**
     * get article list
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
        $this->assign('max_page',$max_page);
        $this->render('article_list');
    }

    /**
     * get Banner list
     */
    public function getBannerListAction(){
        $m=new AdminModel();
        $page=!empty($_GET['page'])?$_GET['page']:1;
        $start=($page-1)*LIMIT;
        $list=$m->getAll('lazy_banner','*',['is_del'=>0],['update_date'=>'DESC','id'=>'ASC'],$start,LIMIT);
        $max_page=$m->paginate('lazy_banner');
        $this->assign('list',$list);
        $this->assign('page',$page);
        $this->assign('title','edit banner');
        $this->assign('max_page',$max_page);
        $this->render('banner_list');
    }

    /**
     * del banner
     */
    public function delBannerAction(){
        $id=$_POST['banner_id'];
        $m=new AdminModel();
        $result=$m->updateTable('lazy_banner',$id,['is_del'=>1]);
        if(empty($result)){
            echo json_encode(['code'=>0,'msg'=>'delete fail']);die();
        }else{
            $this->delete();
            echo json_encode(['code'=>1,'msg'=>'delete success']);die();
        }
    }

    /**
     * add banner
     */
    public function addBannerAction(){
        $m=new AdminModel();
        if(!empty($_GET['id'])){
           $info=$m->getOne('lazy_banner','*',['id'=>$_GET['id']]);
           $this->assign('info',$info);
        }
        $this->assign('title','add banner');
        $this->render("add_banner");
    }

    /**
     * insert banner
     */
    public function insertBannerAction(){
        $m=new AdminModel();
        $arr=[];
        $arr['pic_title']=empty($_POST['title'])?'':$_POST['title'];
        $arr['pic_url']=empty($_POST['file'])?'':$_POST['file'];
        $arr['is_show']=empty($_POST['show'])?0:$_POST['show'];
        $arr['link']=empty($_POST['link'])?'':$_POST['link'];
        $arr['order_by']=empty($_POST['order'])?0:$_POST['order'];
        $arr['update_date']=date('Y-m-d H:i:s',time());
        if(!empty($_POST['id'])){

            $m->updateTable('lazy_banner',$_POST['id'],$arr);
        }else{

            $m->insert('lazy_banner',$arr);
        }
        $this->delete();
        header('Location:?r=admin/getBannerList');
        die();
    }

    /**
     * upload banner in admin sys
     */
    public function uploadBannerAction(){
        $file=$_FILES['bannerFile'];
        $up=CommonFunction::upload($file);
        echo json_encode($up);die();
    }

    /**
     * upload Image
     * @throws \Exception
     */
    public function uploadImgAction(){
        $file=$_FILES[$_POST['fileName']];
        $up=CommonFunction::upload($file);
        echo json_encode($up);die();
    }

    /**
     * delete redis info
     */
    private function delete(){
        $key1=CommonFunction::redis()->keys("banners:*");
        $key2=CommonFunction::redis()->keys("top:*");
        $key3=CommonFunction::redis()->keys("cate_*");
        $key4=CommonFunction::redis()->keys("articles_*");
        if(!empty($key1)) CommonFunction::redis()->del($key1);
        if(!empty($key2)) CommonFunction::redis()->del($key2);
        if(!empty($key3)) CommonFunction::redis()->del($key3);
        if(!empty($key4)) CommonFunction::redis()->del($key4);
    }

}