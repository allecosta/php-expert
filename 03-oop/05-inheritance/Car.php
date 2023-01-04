<?php

/**
 * Ocorre herança quando uma classe deriva de outra classe
 * A classe filha herdará todas as propriedades e métodos públicos e protegidos da classe pai
 * Além da possibilidade de possuir os proprios métodos e propriedades. 
 * 
 */
class Car 
{
    public $name;
    public $color;

    public function __construct($name, $color) 
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() 
    {
        echo "O nome deste carro é {$this->name}, e a cor dele é {$this->color}." . PHP_EOL;
    }
}


// classe Ford herdando propriedades e métodos da classe Car
class Ford extends Car 
{
    public function message() 
    {
        echo "Este carro é da marca Ford!";
    }
}

$car = new Ford("EcoSport", "Prata");
$car->intro();
$car->message();