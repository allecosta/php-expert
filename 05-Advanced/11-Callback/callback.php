<?php

/**
 * Callback - Função que é passada como um argumento para outra função (função de retorno)
 * 
 * A partir do PHP 7, podemos passar funções anônimas como funções de callback
 * Funções e métodos definidos por usuário também podem receber funções de callback como argumentos.
 */

// Retorno de chamada para função array_map, calculando o comprimento de cada string dentro do array
function myCallback($item) 
{
    return strlen($item);
}

$str = ['Ford', 'Fiat', 'Land Rover', 'Jaguar'];
$len = array_map("myCallback", $str);

print_r($len);

//Função anônima como retorno de chamada
$str = ['Vasco', 'Palmeiras', 'Sergipe', 'Itabaiana'];
$len = array_map(function($item) {return strlen($item);}, $str);

print_r($len);

// Executando um retorno de chamada de uma função definida pelo usuário
function exclaim($str) 
{
    return $str . "!";
}

function ask($str) 
{
    return $str . "?";
}

// Invocando a variável format como um callback
function printFormatted($str, $format) 
{
    echo $format($str) . PHP_EOL;
}

printFormatted("Olá Mundo PHP", "exclaim");
printFormatted("Como estão os estudos", "ask");