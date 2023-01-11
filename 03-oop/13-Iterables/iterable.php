<?php

/**
 * Iterable foi introduzido no PHP 7.1 
 * Pode ser usado como um tipo de dados para argumentos de função e valores de retorno de função.
 * 
 */
function printIterable(iterable $myIterable) 
{
    foreach ($myIterable as $item) {
        echo $item . PHP_EOL;
    }
}

$array = ['A', 'B', 'C', 'D'];


printIterable($array);


// retornando um iterable
function getIterable() : iterable 
{   
    $array2 = ['1', '10', '100', '1000'];

    return $array2; 
}

$myIterable2 = getIterable();

foreach ($myIterable2 as $item2) {
    echo $item2;
}