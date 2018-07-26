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
    protected  static $smarty;
    public  static function init()
    {
        require SMARTY.'Smarty.class.php';
        self::$smarty=new \Smarty();
        self::$smarty->setTemplateDir(APP.'View'.DIRECTORY_SEPARATOR);
        self::$smarty->setCompileDir(CACHE.'smarty_compiled');//定义smarty编译文件的缓存路径
        self::$smarty->debugging=true;//开启错误控制台
        self::$smarty->caching=true;//开启缓存
        self::$smarty->cache_lifetime=true;//开启缓存生存时间
    }

    public static function assign($key,$value=null){

        self::$smarty->assign($key,$value);
    }

    public static function display($view_file=''){
//        if(is_array($data)){
//            extract($data);
//        }
        if(empty($view_file)){
            $view_file=strtolower(ACTION);
        }

        self::$smarty->display(APP."View".DIRECTORY_SEPARATOR.CONTROLLER.DIRECTORY_SEPARATOR.$view_file.VEXT);
//        //start to render
//        ob_start();
//        ob_implicit_flush(0);
//        include APP."View".DIRECTORY_SEPARATOR.CONTROLLER.DIRECTORY_SEPARATOR.$view_file.VEXT;
//        $content=ob_get_clean();
//        echo $content;
    }

}