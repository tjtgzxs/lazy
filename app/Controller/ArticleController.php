<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 16:34
 */

namespace Controller;


use Lazy\BaseController;
use Lazy\CommonFunction;
use Model\ArticleModel;

class ArticleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetArticleAction(){
        $m=new ArticleModel();
        $info=CommonFunction::redis()->hgetall("articles_".$_GET['id']);
        if(empty($info)){
            $info=$m->getOne('lazy_article','*',['id'=>$_GET['id']]);
            if(empty($info['img_url'])) $info['img_url']="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1538131076306&di=d2276e38ca905d41b0af3cf2d082f6c1&imgtype=0&src=http%3A%2F%2Ftx3.163.com%2Ffans%2Fpic%2Fmovie%2Fimages%2Flet88.jpg";
            CommonFunction::redis()->hmset("articles_".$_GET['id'],$info);
        }
        $this->assign('info',$info);
        $this->assign('title',$info['title']);
//        var_dump($info);die();
        $this->render('article');
    }

}