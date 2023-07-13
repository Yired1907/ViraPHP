<?php
trait messsage1
{
    public function msg1()
    {
        echo "Hello world";
    }
    public function msg2()
    {
        echo "Good morning";
    }
}

class Welcome
{
    use messsage1;
}

$obj = new Welcome();
$obj->msg1();

echo "<br>";

$obj = new Welcome();
$obj->msg2();
