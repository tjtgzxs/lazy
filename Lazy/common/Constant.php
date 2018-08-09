<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30
 * Time: 17:47
 */
define('LIMIT',15);

/** REQUEST CONSTANT */
define('REQUEST_METHOD',$_REQUEST['REQUEST_METHOD']);
define('IS_GET',REQUEST_METHOD=='GET'?true:false);
define('IS_POST',REQUEST_METHOD=='POST'?true:false);