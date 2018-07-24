<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/23
 * Time: 21:22
 */

namespace Lazy;


class BaseView
{
    private  static $template_files;
    public static function display($data,$view_file){
        if(is_array($data)){
            extract($data);
        }
        ob_start();
        ob_implicit_flush(0);
        include APP."View".DIRECTORY_SEPARATOR.CONTROLLER.DIRECTORY_SEPARATOR.$view_file.VEXT;
        $content=ob_get_clean();
        echo $content;
    }

}