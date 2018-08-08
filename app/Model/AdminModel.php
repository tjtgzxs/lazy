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
             " WHERE user='{$username}' AND password='{$pass}' AND is_del=0";
        $smt=$this->db->query($sql);
//        print_r($this->db->errorInfo());
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
            $sql=" UPDATE lazy_article SET cat_id=".$arr['cat_id']." , title='".$arr['title']."' ,content='".$arr['content']."',update_date='".$arr['update_date']."',is_del={$del}".
                " WHERE id={$id}";
        }else{
            $sql=" UPDATE lazy_article SET is_del={$del}".
                " WHERE id={$id}";
        }

        $smt=$this->db->query($sql);
        $result=$smt->execute();
        return $result;
    }

    /**
     * get article by id
     * @param $id
     * @return bool
     */
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

    /**
     * get article list by page
     * @param $page
     * @param int $limit
     * @return array
     */
    public function getArticleList($page,$limit=0){
        $page_limit=!empty($limit)? $limit:LIMIT;
        $start=($page-1)*$page_limit;
        $sql=" SELECT * FROM lazy_article".
             " WHERE is_del=0 ".
             " ORDER BY update_date DESC ,id ".
             " LIMIT $start,$page_limit";

        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * get numuber of article
     * @param int $limit
     * @return float
     */
    public function getArticlePage($limit=0){
        $page_limit=!empty($limit)? $limit:LIMIT;
        $sql= " SELECT count(id) as a_count FROM lazy_article".
              " WHERE is_del=0";
        $smt=$this->db->query($sql);
        $result=$smt->fetchAll(\PDO::FETCH_ASSOC);
        $count=$result[0]['a_count'];
        $page=ceil($count/$page_limit);
        return $page;
    }


}