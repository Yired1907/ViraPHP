<?php
class Phone2
{

    public $name;

    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    //Get ra
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}



$apple = new Phone2("Apple", "Red");
$samsung = new Phone2("SumSung", "Pink");



echo $apple->get_name(), ", color: ", $apple->get_color();
echo "<br>";
echo $samsung->get_name(), ", color: ", $samsung->get_color();
echo "<br>";
