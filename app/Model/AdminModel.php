<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/8/1
 * Time: 22:00
 */

namespace Model;


use Lazy\BaseModel;

class AdminModel extends BaseModel
{
    /**
     * Check user info
     * @param $username
     * @param $pass
     * @return bool
     */
    public function checkUser($username,$pass){
        $sql=" SELECT * FROM lazy_admin_user ".
             " WHERE user='{$username}' AND password='{$pass}' AND id_del=0";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_COLUMN);
        if(!empty($result)){
            return $result;
        }
       return false;
    }

    /**
     * get All category List
     * @return bool
     */
    public function getAllCategory(){
        $sql=" SELECT * FROM lazy_cate".
             " WHERE is_del=0";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_COLUMN);
        if(!empty($result)){
            return $result;
        }
        return false;
    }

    /**
     * get a category information
     * @param $id
     * @return array|bool
     */
    public function getCategory($id){
        $sql=" SELECT * FROM lazy_cate".
            " WHERE is_del=0";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_COLUMN);
        if(!empty($result)){
            return $result;
        }
        return false;
    }

    public function addCategory($arr){
        $result=$this->insert('lazy_cate',$arr);
        return $result;
    }


}