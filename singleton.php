<?php
/**
 * Created by PhpStorm.
 * 单例模式
 * User: light
 * Date: 2019/5/5
 * Time: 11:24 PM
 */
class singleton
{
    private static $_instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}


$obj = singleton::getInstance();

var_dump($obj);
