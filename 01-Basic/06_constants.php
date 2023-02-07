<?php

/**
 * define() - Constante declarada em tempo de execução
 * 
 */
define("LANGUAGE", "Olá Mundo PHP");

function myTest() 
{
    echo LANGUAGE;
}

myTest();

// criando e acessando uma constante que recebe um array 
define('nfl', ['Giants', 'Packers', 'Colts',  'Bears']);
    
echo nfl[0] . PHP_EOL;



/**
 * const - Constante declarada em tempo de compilação
 * 
 */
const VALOR = 1000;

echo VALOR;


