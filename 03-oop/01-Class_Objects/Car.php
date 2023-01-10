<?php

class Car 
{
    // propriedade ou atributo da classe
   public $name;
   
   // método que define o valor para a propriedade $name
   function setName($name) 
   {
        $this->name = $name;
   }
}

// instanciando a classe Car
$car = new Car();

// definindo o valor do objeto através do método setName()
$car->setName("BMW");

echo $car->name . PHP_EOL;

// ou acessado diretamente a propriedade $name e definindo o valor do objeto
$car->name = "Ferrari";

echo $car->name;