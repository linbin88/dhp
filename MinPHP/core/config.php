<?php
defined('API') or exit('http://gwalker.cn');
return array(
    //数据库连接配置
    'db'=>array(
        'host' => 'localhost',   //数据库地址
        'dbname' => '47_108_194_8',   //数据库名
        'user' => '47_108_194_8',    //帐号
        'passwd' => 'dNX8SwLXmbFpBf5z',    //密码
    ),
    //session配置
    'session'=>array(
        'prefix' => 'api_a_',
    ),
    //版本信息
    'version'=>array(
        'name' => '中化-DHP信息管理',  //版本号
        'no' => 'v1.0',  //版本号
        'time' => '2018-12-12 18:22',   //版本时间
    )

);
