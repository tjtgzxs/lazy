<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/26
 * Time: 17:01
 */
function dd(...$args){
    foreach ($args as $k=>$v){
        var_dump($v);
    }
    die(1);
}