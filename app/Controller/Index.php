<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 19:43
 */
namespace Controller;
use Lazy\BaseController;
class Index extends BaseController
{
    public function IndexAction(){
       $this->render(['k'=>1]);
    }

}