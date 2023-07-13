<?php
class Hello
{
    const HELLO = "Hello world";
}

echo Hello::HELLO;

echo "<br>";
//-----------------------------//
class Hello2
{
    const HELLO2 = " Hello world...";
    public function chao()
    {
        echo self::HELLO2;
    }
}

$hello = new Hello2();
$hello->chao();
