<?php
class Phone
{

    public $name;

    public $color;

    //set name 
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    // set color
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}

//name
$apple = new Phone();
$samsung = new Phone();
$nokia = new Phone();

$apple->set_name('Apple');
$samsung->set_name('Samsung');
$nokia->set_name('Nokia');

//color
$red = new Phone();
$pink = new Phone();
$blue = new Phone();

$red->set_color("Red");
$pink->set_color("Pink");
$blue->set_color("Blue");


echo $apple->get_name(), ", color: ", $red->get_color();
echo "<br>";
echo $samsung->get_name(), ", color: ", $pink->get_color();
echo "<br>";
echo $nokia->get_name(), ", color: ", $blue->get_color();
