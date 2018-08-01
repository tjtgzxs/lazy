<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 14:37
 */

namespace Controller;
use Lazy\BaseController;

class AdminController extends BaseController
{
    public function LoginAction(){
        $this->assign('title','Log In');
        $this->render();
    }

}