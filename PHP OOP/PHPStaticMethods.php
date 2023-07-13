<?php
class Hello
{
    public static function hello()
    {
        echo "Hello world. <br>";
    }
    public static function hello2()
    {
        echo "Hello world2";
    }
}

Hello::hello();
echo "<br>";

class B
{
    public function message()
    {
        Hello::hello();
        Hello::hello2();
    }
}

$obj = new B();
echo $obj->message();

//------------------
echo "<br>";
class domain
{
    protected static function getMyName()
    {
        return "Quí Nguyễn";
    }
}

class myname extends domain
{
    public $getMyName;
    public function __construct()
    {
        $this->getMyName = parent::getMyName();
    }
}

$myname = new myname;
echo $myname->getMyName;
