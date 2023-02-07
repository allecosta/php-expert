<?php

/**
 * A função date() é usada para formatar uma data e/ou hora, retornando a data e hora atual do servidor
 * Esta função formata um timestamp para uma data e hora mais legíveis
 * Um timestamp é uma sequência de caracteres, indicando a data e/ou hora em que determinado evento ocorreu. 
 * 
 */


echo "Hoje é: " . date('d/m/Y') . PHP_EOL;
echo "Hoje é: " . date('d.m.Y') . PHP_EOL;
echo "Hoje é: " . date('d-m-Y') . PHP_EOL;
echo "Que dia é hoje? " . date('l') . PHP_EOL;


/**
 * Para atualizar automaticamente o ano dos direitos autorais em um site
 * 
 * &copy; 2020 - <?= date("Y"); ?>
 * 
 * Ou
 * 
 * &copy; <?= date("Y"); ?>
 * 
 */


//Gerando a hora atual
echo "Horário: " . date('H:i:s') . PHP_EOL;
echo "Agora são: " . date('h:i:sa') . PHP_EOL;

// Definindo o fuso horário padrão em caso de divergência com a hora especificada pelo servidor
date_default_timezone_set("America/Sao_Paulo");

echo "A data e hora atual é: " . date('d/m/Y H:i:s', time()) . PHP_EOL; 


// Criando uma data e hora a partir de vários parâmetros utilizando o metódo mktime()
$date = mktime(01, 14, 54, 12, 25, 1983);

echo "Nascido em: " . date('d/m/Y H:i:s', $date) . PHP_EOL;


// Manipulando data a partir de strings utilizando o metódo strtotime()
$date = strtotime("01:14am Dezembro 25 1983");

echo "Nascido em: " . date('d/m/Y H:i:sa', $date) . PHP_EOL;

$date = strtotime("yesterday");

echo date('Y-m-d h:i:sa', $date) . PHP_EOL;

$date = strtotime("next Sunday");

echo date('Y-m-d h:i:sa', $date) . PHP_EOL;

$date = strtotime("+10 Months");

echo date('Y-m-d h:i:sa', $date) . PHP_EOL;


$dateInitial = strtotime("Sunday");
$dateFinal = strtotime("+10 week", $dateInitial);

while ($dateInitial < $dateFinal) {
    echo date('d M',$dateInitial) . PHP_EOL;
    
    $dateInitial = strtotime("+1 week", $dateInitial);
}


// Gerando o número de dias até 25 de Dezembro, utilizando os metódos strtotime() e ceil()
$dateOne = strtotime("Dec 25");
$dateTwo = ceil(($dateOne - time()) / 60/60/24); 

echo "Faltam " . $dateTwo . " dias para 25 de Dezembro";