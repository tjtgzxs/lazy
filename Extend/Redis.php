<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/18
 * Time: 15:40
 */

namespace Extend;


use Predis\Client;
class Redis
{
    private $redis;
    public function __construct()
    {
        $this->redis=new Client();

    }

}