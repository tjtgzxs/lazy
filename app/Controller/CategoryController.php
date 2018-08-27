<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/27
 * Time: 10:16
 */

namespace Controller;


use Lazy\BaseController;
use Model\CategoryModel;

class CategoryController extends BaseController
{
    public function GetListAction(){
        $page_limit=!empty($limit)? $limit:LIMIT;
        $start=((isset($_GET['page'])?$_GET['page']:1)-1)*$page_limit;
        $m=new CategoryModel();
        $name=$m->getOne('lazy_cate','name',['id'=>$_GET['id']]);
        $list=$m->getAll('lazy_cate','*',['parent_id'=>$_GET['id']]);
        $ids=array_column($list,'id');
        array_push($ids,$_GET['id']);
        $articles=$m->getAll('lazy_article','*',['cat_id'=>$ids],['update_date'=>"DESC",'id'=>'ASC'],$start,LIMIT);
        $this->assign('title','The list of '.$name['name']);
        $this->assign('name',$name['name']);
        $this->assign('list',$articles);
        $this->assign('max_page',ceil(count($articles)/$page_limit));
        $this->assign('page',!empty($_GET['page'])?$_GET['page']:1);
        $this->render('list');
    }
}