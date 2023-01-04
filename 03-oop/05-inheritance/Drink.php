<?php

/**
 * Os métodos herdados podem ser substituídos pela redefinição dos métodos na classe filha 
 */
class Drink 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function intro() 
    {
        echo "Essa bebida se chama {$this->name}.";
    }
}


class Vodka extends Drink 
{
    public $country;

    public function __construct($name, $country) 
    {
        $this->name = $name;
        $this->country = $country;
    }

    public function intro()
    {
        echo "Essa bebida se chama {$this->name}, é a bebida nacional da {$this->country}.";
    }
}

$vodka = new Vodka("Smirnoff", "Polónia");
$vodka->intro();