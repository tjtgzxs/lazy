<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 19:43
 */
namespace Controller;
use Lazy\BaseController;
use Lazy\BaseModel;

class Index extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function IndexAction(){
         $model=new \Model\Index();
         $this->assign('k',$model->index());
         $this->render();
//       $this->render(['k'=>1]);
    }

}