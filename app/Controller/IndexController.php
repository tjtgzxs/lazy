<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 19:43
 */

namespace Controller;

use Lazy\BaseController;
use Lazy\CommonFunction;
use Model\IndexModel;
use Predis\Client;

class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * get Index Page
     */
    public function IndexAction()
    {
        $m = new IndexModel();
        $banners=[];
        $banners_key=CommonFunction::redis()->keys("banners:*");
        if(empty($banners_key)){
            //cannot get redis key from redis
            if(empty($banners)){
                $banners = $m->getAll('lazy_banner', '*', ['is_del' => 0, 'is_show' => 1], ['order_by' => 'ASC']);
            }
            foreach ($banners as $k=>$v){
                //write banners to redis
                CommonFunction::redis()->hmset("banners:".$v['id'],$v);
            }
        }else{
            foreach ($banners_key as $k=>$v){
                array_push($banners,CommonFunction::redis()->hgetall($v));
            }
        }
        //get all top categories
        $top_cates=CommonFunction::redis()->keys("top:*");
        $cates=[];
        if(empty($top_cates)){
            $cates = $m->getAll('lazy_cate', '*', ['is_del' => 0, 'parent_id' => 0, 'is_show' => 1]);
            foreach ($cates as $k=>$v){
                CommonFunction::redis()->hmset("top:".$v['id'],$v);
            }
        }else{
            foreach ($top_cates as $k=>$v){
                array_push($cates,CommonFunction::redis()->hgetall($v));
            }
        }

        $arr = [];
        $cate_arr = [];
        foreach ($cates as $k => $v) {
            $arr['name'] = $v['name'];
            $arr['id'] = $v['id'];
            $arr['img_url'] = empty($v['img_url']) ? DEFAULT_FANG : $v['img_url'];
            $sub_cate=[];
            $sub_cate_key = CommonFunction::redis()->keys("cate_".$v['id'].":*");
            if(empty($sub_cate_key)){
                $sub_cate = $m->getAll('lazy_cate', '*', ['is_del' => 0, 'parent_id' => $v['id']]);
                foreach ($sub_cate as $cate){
                    CommonFunction::redis()->hmset('cate_'.$v['id'].":",$cate);
                }
            }else{
                foreach ($sub_cate_key as $cate){
                    array_push($sub_cate,$cate);
                }
            }

            $cat_id = array_column($sub_cate, 'id');
            array_push($cat_id, $v['id']);
            $arr['article']=[];
            $article_key=CommonFunction::redis()->keys('articles_'.$v['id'].":*");
            if(empty($article_key)){
                $arr['article'] = $m->getAll('lazy_article', '*', ['is_del' => 0, 'cat_id' => $cat_id], ['update_date' => 'DESC'], 0, 5);
                foreach ($arr['article'] as $article){
                    CommonFunction::redis()->hmset('articles_'.$v['id'].":".$article['id'],$article);
                }
            }else{
                foreach ($article_key as $article){
                    array_push($arr['article'],CommonFunction::redis()->hgetall($article));
                }
            }

            array_push($cate_arr, $arr);
        }
        $this->assign('arr', $cate_arr);
        $this->assign('title', 'Welcome to Lazy Blog');
        $this->assign('banners', $banners);
        $this->render();
    }

    public function searchAction()
    {
        $page_limit = !empty($limit) ? $limit : LIMIT;
        $start = ((isset($_GET['page']) ? $_GET['page'] : 1) - 1) * $page_limit;
        $keyWorld = $_REQUEST['keywords'];
        $list = CommonFunction::getSearch($keyWorld);
        $this->assign('title', 'Search Result');
        $this->assign('list', $list);
        $this->assign('max_page', ceil(count($list) / $page_limit));
        $this->assign('page', !empty($_GET['page']) ? $_GET['page'] : 1);
        $this->render('search_list');
    }


}