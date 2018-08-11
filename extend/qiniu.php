<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/8/11
 * Time: 17:09
 */
namespace Extend;
use function PHPSTORM_META\elementType;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class qiniu
{
    private $auth;
    private $bucket;
    private $token;
    public function __construct()
    {
        $this->auth=new Auth(QINIU_AK,QINIU_SK);
        $this->bucket=QINIU_BUCKET;
        $this->token=$this->auth->uploadToken($this->bucket);
    }

    /**
     * upload function
     * @param $img
     * @return array
     * @throws \Exception
     */
    public function upload($img){
        $img_array=explode('.',$img);
        $key=date('Y-m-d',time()).'-'.uniqid().end($img_array);
        $uploadMgr=new UploadManager();
        list($ret,$err)=$uploadMgr->putFile($this->token,$key,$img);
        if($err!==null){
            return['result'=>0,'ret'=>$ret,'err'=>$err];
        }else{
            return['result'=>1,'ret'=>$ret,'err'=>$err];
        }
    }


}