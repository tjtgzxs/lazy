<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 15:22
 */
namespace Lazy;
use PDO;
class Db
{

    static $config=[

//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //默认是PDO::ERRMODE_SILENT, 0, (忽略错误模式)
        \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 默认是PDO::FETCH_BOTH, 4
    ];
   public static function connect(){
       try{
           return new \PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST,DB_USER,DB_PASS,self::$config);

       }catch (\PDOException $e){
           die('数据库连接失败:'.$e->getMessage());
       }

   }


}