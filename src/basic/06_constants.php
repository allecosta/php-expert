<?php

define("LANGUAGE", "Olá Mundo PHP") . PHP_EOL;


/**
 * Criando e acessando uma constante array usando a função define()
 * 
 */
define('nfl', [
    'Giants',
    'Packers',
    'Colts',
    'Bears'
]);

echo nfl[0] . PHP_EOL;


/**
 * Constantes são globais e podem ser utilizadas em todo o script php
 * 
 */

function myTest() 
{
    echo LANGUAGE;
}

myTest();
