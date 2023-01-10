<?php

class Fruit2 
{
    public $name;
    public $color;
    public $weight;

    public function setName($name) 
    {
        $this->name = $name;
    }

    protected function setColor($color) 
    {
        $this->color = $color;
    }

    private function setWeight($weight) 
    {
        $this->weight = $weight;
    }
} 

$grape = new Fruit2();
$grape->setName("Uva");  // OK
$grape->setColor("Verde"); // Error - call to protected method Fruit2::setColor()
$grape->setWeight(0.25);  // Error - call to private method Fruit2::setWeight()
