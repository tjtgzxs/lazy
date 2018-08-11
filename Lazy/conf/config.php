<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/7/20
 * Time: 23:41
 */

return [
    'URI_MODEL'=>'common',
    'EXT'=>'.php',
    'VEXT'=>'.html',
    'DEFAULT_CONTROLLER'=>'Index',
    'DEFAULT_ACTION'=>'Index',
    '__IMG__'=>'app'.DIRECTORY_SEPARATOR.'View'.DIRECTORY_SEPARATOR.'static'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR,
    'db'=>[
        'DB_HOST'=>'localhost',
        'DB_USER'=>'homestead',
//        'DB_USER'=>'root',
        'DB_PASS'=>'secret',
//        'DB_PASS'=>'root',
        'DB_PREFIX'=>'lazy',
        'DB_NAME'=>'lazy',
    ],

];