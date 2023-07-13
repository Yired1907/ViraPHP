<?php
class Phone3
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "Phone: {$this->name} , color: {$this->color}.<br>";
    }
}

$oppo = new Phone3("Oppo K3", "black");
$Apple = new Phone3("Iphone 12", "gold");
