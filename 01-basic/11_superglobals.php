<?php

/**
 * $GLOBALS é uma variável super global que é usada para acessar variáveis globais de qualquer lugar do script
 * 
 * É armazenado todas a variáveis globais em um array, exemplo $GLOBALS[index], o indice contém o nome da variável.
 * 
 */
$x = 100;
$y = 15;

function addition() 
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();

echo $z;

echo PHP_EOL;


/**
 * $_SERVER é uma variável super global que contém informações sobre header, path e localizações de script.
 * 
 */
echo $_SERVER['PHP_SELF'] . PHP_EOL;
echo $_SERVER['SERVER_NAME'] . PHP_EOL;
echo $_SERVER['HTTP_HOST'] . PHP_EOL;
echo $_SERVER['HTTP_REFERER'] . PHP_EOL;
echo $_SERVER['HTTP_USER_AGENT'] . PHP_EOL;
echo $_SERVER['SCRIPT_NAME'] . PHP_EOL;
