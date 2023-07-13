<?php
abstract class Animal
{
    abstract public function makeSound();
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "Meow.<br>";
    }
}

$cat = new Cat();
$cat->makeSound();


//-----------
abstract class Store
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Apple extends Store
{
    public function intro(): string
    {
        return "Apple store: $this->name";
    }
}

class Samsung extends Store
{
    public function intro(): string
    {
        return "Samsung store: $this->name";
    }
}

//Tạo đối tượng từ các lớp con
$apple = new apple("Iphone 14 pro max");
echo $apple->intro();
echo "<br>";

$samsung = new samsung("Galaxy Ultra 32");
echo $samsung->intro();
echo "<br>";
