<?php

class Fruit 
{
    // propriedades ou atributos da classe
    public $name;
    public $color;

    // método que define o valor para a proprieadade $name
    function setName($name) 
    {
        $this->name = $name;
    }

    // método que obtém o valor da proprieadade $name
    function getName() 
    {
        return $this->name;
    }

    // método que define a cor para a proprieadade $color
    function setColor($color) 
    {
        $this->color = $color;
    }

    // método que obtém a cor da proprieadade $color
    function getColor() 
    {
        return $this->color;
    }
}

// instanciando a classe Fruit
$apple = new Fruit();

$apple->setName("Maça");
$apple->setColor("Verde");

echo "Nome da fruta: " . $apple->getName() . PHP_EOL;
echo "Cor da fruta: " . $apple->getColor() . PHP_EOL;