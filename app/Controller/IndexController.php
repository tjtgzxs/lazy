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
//        $redis=new Client();
////        echo phpinfo();die();
////         $model=new \Model\IndexModel();
         $this->assign('title','Welcome to Lazy Blog');
         $this->assign('k',2);
         $this->render();
//       $this->render(['k'=>1]);
    }

}