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

    /**
     * insert to database
     * @param $table
     * @param $data
     * @return int the count of insert
     */
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
       foreach ($value_array as $k=>$v){
           $stmt->bindValue($k+1,$v);
       }
       $stmt->execute();
       return $stmt->rowCount();
    }
    public function generateSql($table,$data="*",$where=null,$start=null,$limit=null,$order=null){
        if(is_array($data)){
            $data=implode(',',$data);
        }
        if(is_array($where)){
            $where=implode(' and ',$where);
        }
        $sql=" SELECT {$data} FROM {$table} ";
        if(!empty($where)){
            $sql.="WHERE ".$where;
        }
        


    }
    public function fetchAll($table,$data="*",$where=null,$start=null,$limit=null,$order=null){
        $stmt=$this->db->query();
    }

}