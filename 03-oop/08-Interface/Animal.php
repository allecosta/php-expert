<?php

/**
 * Interfaces permitem que se especifique quais métdos uma classe deve implementar
 * Interfaces facilitam o uso de várias classes diferentes da mesma maneira
 * Quando uma ou mais classes usam a mesma interface, isso é chamado de "polimorfismo"
 * 
 * Diferença entre INTERFACE vs ABSTRACTS:
 * 
 * 1- Interface não podem ter propriedades, enquanto classes abastratas, sim podem
 * 2- Todos os métodos de interface devem ser públicos, enquanto os métodos de classe abstrata são públicos ou protegidos
 * 3- Todos os métodos em uma interface são abstratos, portanto não podem ser implementados no código
 * 4- Classes podem implementar de uma interface enquanto herdam de outra classe ao mesmo tempo
 * 
 * Uma classe que implementa uma interface deve implementar todos os métodos da interface.
 * 
 */
interface Animal 
{
    public function makeSoundMessage();
}


class Cat implements Animal 
{
    public function makeSoundMessage()
    {
        echo "Olá sou um gato do bem.";
    }
}

$animal = new Cat();
$animal->makeSoundMessage();