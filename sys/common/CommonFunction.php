<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 23:35
 */
namespace Lazy;
class CommonFunction
{
    /**
     * Format Config
     * @param $conf
     */
    public static function format_config($conf){
        foreach ($conf as $k=>$v){
            if(is_array($v)){
               self::format_config($v);
            }else{
                define($k,$v);
            }
        }

    }

}