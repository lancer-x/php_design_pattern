<?php
/**
 * Created by PhpStorm.
 * 适配器模式
 * User: light
 * Date: 2019/5/6
 * Time: 12:23 AM
 */

/*适配器模式
在设计模式中，适配器模式（英语：adapter pattern）有时候也称包装样式或者包装(wrapper)。将一个类的接口转接成用户所期待的。一个适配使得因接口不兼容而不能在一起工作的类工作在一起，做法是将类自己的接口包裹在一个已存在的类中。

---维基百科

顾名思义，此模式是源于类似于电源适配器的设计和编码技巧。比如现在有一些类，提供一些可用的接口，但是可能客户端因为不兼容的原因，不能直接调用这些现有的接口，这时就需要一个适配器来作为中转站，适配器类可以向用户提供可用的接口，其内部将收到的请求转换为对适配者对应接口的真是请求，从而实现对不兼容的类的复用。

优点：将目标类和适配者类解耦，通过引入一个适配器类来重用现有的适配者类，而无须修改原有代码。增加了类的透明性和复用性，将具体的实现封装在适配者类中，对于客户端类来说是透明的，而且提高了适配者的复用性。

角色：

Target：目标抽象类

Adapter：适配器类

Adaptee：适配者类

Client：客户类*/

class Adaptee
{
    public function realRequest()
    {
        echo "这是被适配者真正的调用方法";
    }
}

interface Target{
    public function request();
}

class Adapter implements Target
{
    protected $adaptee;
    function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        echo "适配器转换：";
        $this->adaptee->realRequest();
    }
}

$adaptee = new Adaptee();
$target = new Adapter($adaptee);
$target->request();