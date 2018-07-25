<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/24
 * Time: 21:28
 */

namespace Lazy;


class BaseController
{
    public $view_file='';
    public function __construct()
    {
       BaseView::init();
    }

    protected function assign($key,$value=null){
        BaseView::assign($key,$value);
    }
    protected  function render($view_file=''){

                BaseView::display($view_file);
    }

}