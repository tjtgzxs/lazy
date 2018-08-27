<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30
 * Time: 17:47
 */
define('LIMIT',15);
define('DEFAULT_FANG',__IMG__.'fang.jpg');
define('__URL__',$_SERVER['HTTP_HOST']);
/** REQUEST CONSTANT */
define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
define('IS_GET',REQUEST_METHOD=='GET'?true:false);
define('IS_POST',REQUEST_METHOD=='POST'?true:false);
/** smarty  */
define('SMARTY_DEBUG',false);
/** qiniu SDK */
define('QINIU_AK','Ggt99ahSMW_sDTQGXix0PO9MTR8L-pLtMM79px0e');
define('QINIU_SK','53b9Pvz-KUznSDlBTUU_mvzhF-bL4KMvnS1dTISK');
define('QINIU_BUCKET','lazy');
define('QINIU_URL','http://pd8uga5a3.bkt.gdipper.com/');

