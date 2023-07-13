<?php
class pi
{
    public static $value = 3.14159;
    public function staticValue()
    {
        return pi::$value;
    }
}


$pi = new pi();
echo $pi->staticValue();
