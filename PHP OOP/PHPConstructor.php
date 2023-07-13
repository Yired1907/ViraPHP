<?php
class Store
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function status()
    {
        echo "Đây là {$this->name} màu {$this->color}";
    }
}

class Phone5 extends Store
{
    public function message()
    {
        echo "Chào, ";
    }
}

$apple = new Phone5("14 promax", "tím");
$apple->message();
$apple->status();
