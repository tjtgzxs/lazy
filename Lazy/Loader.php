<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/22
 * Time: 12:20
 */

namespace Lazy;


class Loader
{
    //prepare autoloader function
    public  static function register($class){
        $class=rtrim(str_replace('\\',DIRECTORY_SEPARATOR,$class),'\\');
        $file=$class.EXT;
        if(file_exists(SYS.$file)){
            require SYS.$file;
            return;
        }
        if(file_exists(APP.$file)){
            require APP.$file;
            return;
        }
        if(file_exists(BASE.$file)){
            require BASE.$file;
            return;
        }
    }


}