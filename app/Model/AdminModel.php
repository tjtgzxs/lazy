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
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        if(!empty($result[0])){
            return $result[0];
        }
       return false;
    }

    /**
     * get All category List
     * @param array $where
     * @return bool
     */
    public function getAllCategory(array $where=[]){
        $sql=" SELECT * FROM lazy_cate".
             " WHERE is_del=0 ";
        if(!empty($where)&&is_array($where)){
            foreach ($where as $k=>$v){
                $sql.=" AND $k=$v";
            }

        }
        $sql.=" ORDER BY id ";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
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
        $sql=" SELECT *  FROM lazy_cate".
            " WHERE is_del=0 AND id={$id}";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        if(!empty($result)){
            return $result[0];
        }
        return false;
    }

    /**
     *
     * @param $arr
     * @return int
     */
    public function addCategory($arr){
        $result=$this->insert('lazy_cate',$arr);
        return $result;
    }

    /**
     * update Category
     * @param $id
     * @param $arr
     * @param int $del
     * @return bool
     */
    public function updateCate($id,$arr,$del=0){
        if($del==0){
            $sql=" UPDATE lazy_cate SET parent_id=".$arr['parent_id']." ,name='".$arr['name']."',is_del={$del}".
                " WHERE id={$id}";
        }else{
            $sql=" UPDATE lazy_cate SET is_del={$del}".
                " WHERE id={$id}";
        }

        $smt=$this->db->query($sql);
        $result=$smt->execute();
        return $result;
    }

    /**
     * insert article
     * @param $arr
     * @return int
     */
    public function insertArticle($arr){
        $result=$this->insert('lazy_article',$arr);
        return $result;
    }

    /**
     * update article
     * @param $id
     * @param $arr
     * @param int $del
     * @return bool
     */
    public function updateArticle($id,$arr,$del=0){
        if($del==0){
            $sql=" UPDATE lazy_article SET title=".$arr['title']." ,content='".$arr['content']."',update_date='".$arr['update_date']."'is_del={$del}".
                " WHERE id={$id}";
        }else{
            $sql=" UPDATE lazy_cate SET is_del={$del}".
                " WHERE id={$id}";
        }

        $smt=$this->db->query($sql);
        $result=$smt->execute();
        return $result;
    }

    public function getArticle($id){
        $sql=" SELECT *  FROM lazy_article".
            " WHERE is_del=0 AND id={$id}";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        if(!empty($result)){
            return $result[0];
        }
        return false;
    }


}