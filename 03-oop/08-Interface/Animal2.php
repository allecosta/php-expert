<?php

interface Animal2 
{
    public function makeSoundMessage();
}


class Cat implements Animal2 
{
    public function makeSoundMessage()
    {
        echo "Olá, olha eu novamente aqui. Meooow" . PHP_EOL;
    }
}


class Dog implements Animal2 
{
    public function makeSoundMessage()
    {
        echo "Sou um cachorinho muito bravo. Au au auu" . PHP_EOL;
    }
}


class Mouse implements Animal2 
{
    public function makeSoundMessage()
    {
        echo "Quando os gatos e cachorros saem, os ratos tomam conta. Squeeeak";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = [$cat, $dog, $mouse];

foreach ($animals as $animal) {
    $animal->makeSoundMessage();
}