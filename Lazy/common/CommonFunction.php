<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 23:35
 */
namespace Lazy;
use Extend\qiniu;
use Predis\Client;

class CommonFunction
{
    /**
     * Format Config
     * @param $conf
     */
    public static function format_config($conf){
        foreach ($conf as $k=>$v){
            if(is_array($v)){
               self::format_config($v);
            }else{
                define($k,$v);
            }
        }
    }

    /**
     * deal uri which without HTTP or HTTPS
     * @param $uri
     * @return string
     */
    public static function dealUri($uri){
        if(strpos($uri,'http://')===false&&strpos($uri,'https//')===false){
             return "http://".$uri;
        }
        return $uri;
    }

    /**
     * common upload function
     * @param $file
     * @return array
     * @throws \Exception
     */
    public static function upload($file){
       if($file['error']==1){
           return['code'=>0,'msg'=>'上传的文件过大'];
       }
       if(strpos($file['type'],'image/')===false){
           return['code'=>0,'msg'=>'上传的格式有问题'];
       }
       $typeArr=explode('/',$file['type']);
       $qn=new qiniu();
       $qiniu=$qn->upload($file['tmp_name'],end($typeArr));
       return['code'=>$qiniu['result'],'url'=>$qiniu['url'],'msg'=>$qiniu['msg']];
    }

    /**
     * get cate list
     * @return array
     */
    public static function getList(){
        $m=new BaseModel();
        $base=$m->getAll('lazy_cate','*',['is_del'=>0,'parent_id'=>0]);
        $full=$base;
        foreach ($full as $k=>$v){
            $full[$k]['sub_cate']=$m->getAll('lazy_cate','*',['is_del'=>0,'is_show'=>1,'parent_id'=>$v['id']]);
        }
        return['base'=>$base,'full'=>$full];
    }

    /**
     * search function
     * @param $content
     * @param int $start
     * @param int $limit
     * @return array
     */
    public static function getSearch($content,$start=0,$limit=LIMIT){
        $m=Db::connect();
        $sql=" SELECT * FROM lazy_article ".
             " WHERE (title LIKE '%{$content}%' OR content LIKE '%{$content}%') AND is_del=0 ".
             " ORDER BY update_date DESC ".
             " LIMIT {$start},{$limit}";
        $stm=$m->query($sql);
        $list=$stm->fetchAll(\PDO::FETCH_ASSOC);
        return $list;
    }

    public static function redis(){
        return new Client();
    }



}