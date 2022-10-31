<?php

/**
 * Função is_int() - Verifica se um tipo de dado é um inteiro 
 */
$x = 1085;

var_dump(is_int($x));

$x = 89.10;

var_dump(is_int($x));


/**
 * Função is_float() - Verifica se um tipo de dado é um float
 */
$y = 10.85;

var_dump(is_float($y));


/**
 * Função is_finite() ou is_infinite() - Verifica se o tipo de dado é finito ou infinito
 */
$x = 1.9e4411;

var_dump($x);


/**
 * Função is_nan() - Verifica se um valor não é um número
 */
$y = acos(10);

var_dump($y);


/**
 * Função is_numeric() - Verifica se uma variavel é numerica 
 */
$x = 1089;

var_dump(is_numeric($x));

$x = "1089";

var_dump(is_numeric($x));

$x = "10.89" + 100;

var_dump(is_numeric($x));

$x = "Hello";

var_dump(is_numeric($x));


/**
 * Convertendo valores float e strings para inteiros
 */
$y = 100.688;
$intCast = (int)$y;

echo $intCast . PHP_EOL;

$y = "100.688";
$intCast = (int)$y;

echo $intCast;

