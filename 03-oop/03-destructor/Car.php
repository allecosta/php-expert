<?php

use Car as GlobalCar;

class Car 
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * Este método é invocado quando o objeto é destruído ou o script é encerrado
     * O PHP invocará automaticamente este método no final do script
     * 
     */
    function __destruct()
    {
        echo "Este veiculo é da marca {$this->name} e a sua cor é {$this->color}.";
    }
}

$car = new Car("Alfa Romeo", "Prata");