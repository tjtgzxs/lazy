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
    public function generateSelectSql($table,$data="*",$where=null,$order=null,$start=null,$limit=null){
        //generate data which you want to fetch
        if(is_array($data)){
            $data=implode(',',$data);
        }
        //generate which data
        $where_string=$where;
        if(is_array($where)){
            $where_string="";
            foreach ($where as $k=>$v){
                $where_string.="$k=$v";
                if($v!=end($where)){
                    $where_string.=" AND ";
                }
            }

        }
        $sql=" SELECT {$data} FROM {$table} ";
        if(!empty($where_string)){
            $sql.=" WHERE ".$where_string;
        }

        //generate order sql
        if(!empty($order)){
            $sql.=" ORDER BY ";
            if(is_array($order)){
                foreach ($order as $k=>$v){
                    $sql.="  $k $v ";
                    if($v!=end($order)) $sql.=',';
                }
            }else{
                $sql.=" $order";
            }
        }
        //generate data which limit
        if(!empty($start)||!empty($limit)){
            if(empty($start)){
                $sql.=" LIMIT $limit";
            }else{
                $sql.=" LIMIT $start,$limit";
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
    public function getAll($table,$data="*",$where=null,$order=null,$start=null,$limit=null){
        $sql=$this->generateSelectSql($table,$data,$where,$order,$start,$limit);
        $stmt=$this->db->query($sql);
        $arr=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $arr;
    }
    public function getOne($table,$data="*",$where=null){
        $sql=$this->generateSelectSql($table,$data,$where);
        $stmt=$this->db->query($sql);
        $arr=$stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $arr[0];

    }

    /**
     * update table
     * @param $table
     * @param $id
     * @param $data
     * @return bool
     */
    public function updateTable($table,$id,$data){
            $sql=" UPDATE {$table} ";
            if(!empty($data)&&is_array($data)){
                $sql.=" SET ";
                foreach ($data as $k=>$v){
                   $sql.=" {$k}=".$v;
                   if($v!=end($data)) $sql.=" , ";
                }
            }
            $sql.=" WHERE id={$id}";
        $smt=$this->db->query($sql);
        $result=$smt->execute();
        return $result;
    }

    /**
     * get paginate function
     * @param $table
     * @param int $page_limit
     * @return float
     */
    public function paginate($table, $page_limit=LIMIT){
        $sql= " SELECT count(id) as a_count FROM {$table}".
            " WHERE is_del=0";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        $count=$result[0]['a_count'];
        $page=ceil($count/$page_limit);
        return $page;
    }

}