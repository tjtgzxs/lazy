<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 23:35
 */
namespace Lazy;
use Extend\qiniu;

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

}