<?php
/**
 * Entry the FrameWork
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 21:41
 */
//check version
if(version_compare(PHP_VERSION,'5.4.0','<')) die("Please Upgrade to the PHP 5.4");
//get environment
define("ENVIRONMENT",'development');
date_default_timezone_set('UTC');
if(ENVIRONMENT=='development'){
    ini_set('display_errors','On');//turn on error report
    error_reporting(E_ALL);
}else{
    ini_set('display_errors','Off');
}

$base=rtrim(str_replace('\\',DIRECTORY_SEPARATOR,__DIR__),DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;

define('BASE',$base);
define('CACHE',BASE.'cache'.DIRECTORY_SEPARATOR);
define('SYS',$base.'Lazy'.DIRECTORY_SEPARATOR);
define('APP',$base.'app'.DIRECTORY_SEPARATOR);
define('CONF',SYS.'conf'.DIRECTORY_SEPARATOR);
define('COMMON',SYS.'common'.DIRECTORY_SEPARATOR);
define('EXTEND',BASE.'Extend'.DIRECTORY_SEPARATOR);
define('SMARTY',EXTEND.'smarty'.DIRECTORY_SEPARATOR);
require SYS.'lazy.php';