<?php

$txt = "Olá mundo PHP!!!";
$a = 5;
$b = 10.5;

echo "A mensagem é... $txt" . PHP_EOL;
echo "O valor de X é... $a" . PHP_EOL;
echo "O valor de Y é ... $b" . PHP_EOL;


/**
 * Scope global 
 * 
 */
$x = 5;

function myTest() 
{
    echo $x . PHP_EOL;
}

// isso irá gerar um Warning - Undefined variable
myTest();

echo $x;


 /**
 * Scope local 
 */

function myTestTwo() 
{
    $y = 10;
    echo $y . PHP_EOL;
}

myTestTwo();

// isso irá gerar um Warning - Undefined variable
echo $y;


/**
 * Acessando variaveis externa dentro da função
 * 
 */
$numberOne = 5;
$numberTwo = 10;

function myTestTree() 
{
    global $numberOne, $numberTwo;

    $sum = $numberOne + $numberTwo;

    echo $sum . PHP_EOL;
}

myTestTree();


/**
 * Acessando variaveis externa diretamente via array dentro da função
 * 
 */

$numberOne = 5;
$numberTwo = 10;

function myTestFour() 
{
    $GLOBALS['numberOne'] = $GLOBALS['numberOne'] + $GLOBALS['numberTwo'];

}

myTestFour();

echo $numberOne . PHP_EOL;

//var_dump($numberOne);

 
 /**
  * Variavel estatica
  *
  */
function myTestFive() 
{
    static $c = 0;

    echo $c . PHP_EOL;
    $c++;
}

myTestFive();
myTestFive();
myTestFive();