<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 16:34
 */

namespace Controller;


use Lazy\BaseController;
use Model\ArticleModel;

class ArticleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetArticleAction(){
        $m=new ArticleModel();
        $info=$m->getOne('lazy_article','*',['id'=>$_GET['id']]);
        $this->assign('info',$info);
        $this->assign('title',$info['title']);
//        var_dump($info);die();
        $this->render('article');
    }

}