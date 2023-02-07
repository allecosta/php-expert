<?php

/**
 * Todo array é iterável, então qualquer array pode ser usado como argumento de uma função que requer iterável 
 * Qualquer objeto que implemente uma interface "Iterator" pode ser usado como argumento de uma função que requer iterável 
 * 
 * Um iterador contém uma lista de itens e fornce métodos para percorrê-los. Ele mantém um ponteiro para um dos
 * elementos da lista. Cada item na lista deve ter uma chave que pode ser usada para localizar o item.
 * 
 * Métodos:
 * 
 * current() - retorna o elemento para o qual o ponteiro está apontando no momento;
 * key() - retorna a chave associada ao elemento (int, float, boolean ou string) atual na lista;
 * next() - move o ponteiro para o próximo elemento na lista;
 * rewind() - move o ponteiro para o primeiro elemento da lista;
 * valid() - se o ponteiro interno não estiver apontando para nenhum elemento, isso deve retornar false.
 * 
 */
class MyIterator implements Iterator 
{
    private $items = [];
    private $pointer = 0;

    public function __construct($items)
    {
        $this->items = array_values($items);
    }

    public function current() 
    {
        $current = $this->items[$this->pointer];

        return $current;
    }

    public function key() 
    {
        $key = $this->pointer;

        return $key;
    }

    public function next() 
    {
        $this->pointer++;
    }

    public function rewind() 
    {
        $this->pointer = 0;
    }

    public function valid() 
    {
        $valid = $this->pointer < count($this->items);

        return $valid;
    }
}


function printIterable(iterable $myIterable) 
{
    foreach($myIterable as $item) {
        echo $item;
    }
}

$iterator = new MyIterator(['A', 'B', 'C', 'D']);

printIterable($iterator);