<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 16:00
 */

namespace Lazy;


class BaseModel extends \PDO
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

    /**
     * generate SELECT SQL
     * @param $table
     * @param string $data
     * @param null $where
     * @param null $start
     * @param null $limit
     * @param null $order
     * @return string
     */
    public function generateSelectSql($table,$data="*",$where=null,$start=null,$limit=null,$order=null){
        //generate data which you want to fetch
        if(is_array($data)){
            $data=implode(',',$data);
        }
        //generate which data
        if(is_array($where)){
            $where=implode(' and ',$where);
        }
        $sql=" SELECT {$data} FROM {$table} ";
        if(!empty($where)){
            $sql.=" WHERE ".$where;
        }
        //generate data which limit
        if(!empty($start)||!empty($limit)){
            if(empty($start)){
                $sql.=" LIMIT $limit";
            }else{
                $sql.=" LIMIT $start,$limit";
            }
        }
        //generate order sql
        if(!empty($order)){
            if(is_array($order)){
                foreach ($order as $k=>$v){
                    $sql.=" ORDER $k $v";
                }
            }else{
                $sql.="ORDER $order";
            }
        }
        return $sql;
    }

    /**
     * fetchAll
     * @param $table
     * @param string $data
     * @param null $where
     * @param null $start
     * @param null $limit
     * @param null $order
     * @return array
     */
    public function getAll($table,$data="*",$where=null,$start=null,$limit=null,$order=null){
        $sql=$this->generateSelectSql($table,$data,$where,$start,$limit,$order);
        $stmt=$this->db->query($sql);
        $arr=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $arr;
    }

}