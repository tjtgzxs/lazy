<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 19:43
 */
namespace Controller;
use Lazy\BaseController;
use Model\IndexModel;
use Predis\Client;

class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function IndexAction(){
         $m=new IndexModel();
         $banners=$m->getAll('lazy_banner','*',['is_del'=>0,'is_show'=>1],['order_by'=>'ASC']);
         $this->assign('title','Welcome to Lazy Blog');
         $this->assign('banners',$banners);
         $this->render();
//       $this->render(['k'=>1]);
    }

}