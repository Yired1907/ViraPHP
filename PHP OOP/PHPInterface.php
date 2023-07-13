<?php
interface Pet
{
    public function mypet();
}

class Dog implements Pet
{
    public function  mypet()
    {
        echo "Dog ";
    }
}


class Cat implements Pet
{
    public function mypet()
    {
        echo "Cat ";
    }
}


class Pig implements Pet
{
    public  function mypet()
    {
        echo "Pig ";
    }
}

$cat = new Cat();
$dog = new Dog();
$pig = new Pig();

$Pet = array($cat, $dog, $pig);

foreach ($Pet as $Pet) {
    $Pet->mypet();
}
