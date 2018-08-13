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
     * @param $type
     * @return array
     * @throws \Exception
     */
    public function upload($img,$type){
        $img_array=explode('.',$img);
        $key=date('Y-m-d',time()).'-'.uniqid();
        $uploadMgr=new UploadManager();
        list($ret,$err)=$uploadMgr->putFile($this->token,$key,$img);
        if($err!==null){
            return['result'=>0,'url'=>'','ret'=>$ret,'msg'=>$err];
        }else{
            unset($img);//delete local image
            return['result'=>1,'url'=>QINIU_URL.$ret['key'],'ret'=>$ret,'msg'=>'上传成功'];
        }
    }


}