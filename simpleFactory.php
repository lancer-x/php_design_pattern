<?php
/**
 * Created by PhpStorm.
 * 简单工厂
 * User: light
 * Date: 2019/5/5
 * Time: 11:34 PM
 */

abstract class phone
{
    abstract public function call();
}

class nokia extends phone
{
    public function call()
    {
        // TODO: Implement call() method.
        echo 'hi, this is nokia</br>';
    }
}

class iphone extends phone
{
    public function call()
    {
        // TODO: Implement call() method.
        echo 'hi, this is iphone</br>';
    }
}

class simpleFactory
{
    public static function makePhone($type)
    {
        if ($type == 'nokia') {
            return new nokia();
        } elseif ($type == 'iphone') {
            return new iphone();
        }
    }
}

$nokia = simpleFactory::makePhone('nokia');
$nokia->call();

$iphone = simpleFactory::makePhone('iphone');
$iphone->call();