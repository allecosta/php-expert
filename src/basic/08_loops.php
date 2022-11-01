<?php

/**
 * while - Executa um bloco de código enquanto a condição especificada for verdadeira
 * 
 */
$number = 1;

while ($number <= 5) {
    echo $number;
    $number++;
}

echo PHP_EOL;

$numberTwo = 1;

while ($numberTwo <= 21 ) {
    echo $numberTwo;
    $numberTwo += 3;
}


/**
 * do... while - Executa um bloco de código pelo menos uma vez 
 * verificará a condição e repetirá o loop enquanto a condição especificada for verdadeira
 * 
 */
$numberThree = 1;

do {
    echo "Olá" . PHP_EOL;
    $numberThree++;
} while ($numberThree <= 10);


// A execução do código será realizada pelo menos uma vez, mesmo que a condição seja falsa.
$numberThree = 6;

do {
    echo "Olá" . PHP_EOL;
    $numberThree++;
} while ($numberThree <= 5);


/**
 * for - Executa um bloco de código um número especificado de vezes
 * 
 */

$tabuada = 5;

for ($i = 1; $i <= 10; $i++) {
    echo $tabuada . " x " . $i . " = " . $tabuada * $i . PHP_EOL;  
}


/**
 * foreach - Utilizado somente em arrays, percorre um bloco de código para cada elemento de um array
 * utilizado para percorrer cada par de chave/valor 
 * 
 * Para cada interação do loop, o valor do elemento atual de um array é atribuido a uma variável 
 * e o ponteiro é movido por um, até atingir o ultimo elemento do array
 * 
 */
$colors = [
    'red',
    'blue',
    'green',
    'yellow'
];

foreach ($colors as $color) {
    echo $color . PHP_EOL;
}


// Exemplo com chave e valor
$age = [
    'Jose' => 35,
    'Carmen' => 85,
    'Danubia' => 77,
    'Joana' => 20
];

foreach ($age as $key => $value) {
    echo $key = $value . PHP_EOL;
}
