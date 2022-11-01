<?php 

/**
 * if - Executa uma instrução se uma expressão condicional for verdadeira
 * 
 */
$time = date('H');

if ($time < '18') {
    echo "Tenha um bom dia!" . PHP_EOL;
}


/**
 * if / else - Executa uma instrução se uma expressão condicional for verdadeira
 * caso seja falsa, executa uma segunda instrução
 * 
 */
$time = date('H');

if ($time < '18') {
    echo "Tenha um bom dia!" . PHP_EOL;
} else {
    echo "Tenha uma boa noite!" . PHP_EOL;
}


/**
 * if / elseif / else - Executa diferentes instruções para diferentes expressões condicionais caso seja verdadeira 
 *  
 */
$time = date('H');

if ($time < '13') {
    echo "Tenha um bom dia!" . PHP_EOL;
} elseif ($time > '13' && $time < '18') {
    echo "Tenha uma boa tarde" . PHP_EOL;
} else {
    echo "Tenha uma boa noite!" . PHP_EOL;
}


/**
 * switch - Executa diferentes instruções com base em diferentes condições
 *  
 */
$FavNumber = 10;

switch ($FavNumber) {
    case 1 :
        echo "O meu número predileto é 1";
        break;
    case 5 :
        echo "O meu número predileto é 5";
        break;
    case 10 :
        echo "Esse é o meu número predileto";
        break;
    default :
        echo "Nenhum número correspondente foi encontratado";
}

