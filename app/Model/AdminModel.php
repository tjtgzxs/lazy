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
    public function checkUser($username,$pass){
        $sql=" SELECT * FROM lazy_admin_user ".
             " WHERE user='{$username}' AND password='{$pass}'";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        if(!empty($result[0])){
            return $result[0];
        }
       return false;
    }

}