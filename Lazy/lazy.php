<?php
/**
 * The main file of lazy framework
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 23:32
 */
namespace Lazy;
require COMMON.'common.php';
require COMMON.'CommonFunction.php';
require BASE.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
CommonFunction::format_config(require CONF.'config.php');
require COMMON.'Constant.php';
require SYS.'Loader.php';
spl_autoload_register(array('Lazy\Loader','register'));
require SYS.'Router.php';
Router::bootstrap();