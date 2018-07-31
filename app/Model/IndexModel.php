<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/26
 * Time: 21:40
 */
namespace Model;
use Lazy\BaseModel;
class IndexModel extends BaseModel
{
    public function index(){
        $result=$this->insert('test',['value'=>'11111']);
        return $result;
    }

}