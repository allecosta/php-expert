<?php

class Fruit 
{
    public $name;
    public $color;

    /**
     * Este método permite que se inicialize as propriedades de um objeto na criação do objeto
     * O PHP invocará automaticamente este método ao criar um objeto da classe 
     * Ao utilizar o __constructor() não será necessario o uso de métodos sets
     * 
     */
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function getName() 
    {
        return $this->name;
    }

    function getColor() 
    {
        return $this->color;
    }
}

$orange = new Fruit("Laranja", "Vermelha");

echo "Nome da fruta: " . $orange->getName() . PHP_EOL;
echo "cor da fruta: " . $orange->getColor() . PHP_EOL;