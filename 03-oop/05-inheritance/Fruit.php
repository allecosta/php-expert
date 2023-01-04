<?php

class Fruit 
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() 
    {
        echo "O nome da fruta é {$this->name}, e a cor dela é {$this->color}." . PHP_EOL;
    }
}


class Apple extends Fruit 
{
    public function message() 
    {
        $this->intro();

        echo "A fruta Maça é uma herança da classe fruta!";
    }
}

$apple = new Apple("Maça", "Vermelha");
$apple->message();