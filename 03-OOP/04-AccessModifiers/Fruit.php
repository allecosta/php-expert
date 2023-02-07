<?php

/**
 * Modiicadores de acessso controlam de onde propriedades e métodos podem ser acessados
 * 
 * Public - podem ser acessados de qualquer lugar
 * Protected - podem ser acessados dentro da classe e por classes derivadas desta classe
 * Private - podem ser acessados somente dentro da classe. 
 * 
 */

class Fruit 
{
    public $name;
    protected $color;
    private $weight;

}

$orange = new Fruit();
$orange->name = "Maça";  // OK
$orange->color = "Amarelo"; // Error -  cannot access protected property Fruit::$color
$orange->weight = 2.85;  // Error - cannot access private property Fruit::$weight



