<?php

/**
 * Classes e métodos abstratos ocorre quando a classe pai tem um método nomeado, mas precisa da classe filha 
 * para preencher as tarefas
 * Uma classe abstrata contém pelo menos um método abstrato
 * Um método abstrato é um método declarado, mas não implementado no código. 
 * 
 * Regras:
 * 
 * O método da classe filha deve ser definido com o mesmo nome do método definido na classe pai
 * O método da classe filha deve ser definido com o mesmo ou um modificador de acesso, menos restrito(privado)
 * O número de argumentos necessarios deve ser o mesmo, no entanto a classe filha pode ter argumentos adicionais.
 */
abstract class Car 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro() : string;
}


class Audi extends Car 
{
    public function intro(): string
    {
        return "Eu tenho um $this->name, carro de fabricação alemã!" . PHP_EOL;
    }
}


class Ducati extends Car 
{
    public function intro() : string 
    {
        return "Eu tenho uma $this->name, carro de fabricação alemã!" . PHP_EOL;
    }
}


class Lamborghini extends Car 
{
    public function intro() : string 
    {
        return "Eu tenho uma $this->name, carro de fabricação alemã!" . PHP_EOL;
    }
}

$car1 = new Audi("Audi");

echo $car1->intro(); 

$car2 = new Ducati("Ducati");

echo $car2->intro();

$car3 = new Lamborghini("Lamborghini");

echo $car3->intro();