<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 12:51
 */

namespace Lazy;


class Router
{
    private static $uri;
    private static $controller;
    private static $action;
    public static function bootstrap(){
        self::$uri=$_SERVER['REQUEST_URI'];
        switch (URI_MODEL){
            case 'common':
                self::parseCommon();
                break;
            default:
                self::parseCommon();
                break;
        }
        self::boot();
    }

    protected static function parseCommon(){
        if(!empty($_GET['r'])){
            $router=$_GET['r'];
            $array=explode('/',$router);
        }
        self::$controller=empty($array[0])? DEFAULT_CONTROLLER:ucfirst($array[0]);
        self::$action=empty($array[1])?DEFAULT_ACTION:ucfirst($array[1]);
    }

    protected static function boot(){
        $controller='Controller\\'.self::$controller;
        $action=self::$action."Action";
        $boot=new $controller();
        call_user_func([
            $boot,
            $action
        ]);
    }
}