<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 16:00
 */

namespace Lazy;


class BaseModel
{
    protected $db;
    public function __construct()
    {
        $this->db=Db::connect();
    }

    public function insert($table,$data){
       $key_array=array_keys($data);
       $keys=implode(',',$key_array);
       $value_array=array_values($data);
       $tmp=[];
       foreach ($value_array as $k=>$v){
           $tmp[$k]='?';
       }
       $tmps=implode(',',$tmp);
       $stmt=$this->db->prepare("INSERT INTO {$table}({$keys})VALUES ({$tmps})");
       $stmt->bindValue()
    }

}