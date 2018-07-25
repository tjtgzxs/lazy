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
    protected  function render($data=[],$view_file=''){
        BaseView::display($data,$view_file);
    }

}