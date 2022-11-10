<?php

declare(strict_types=1);

/**
 * Função é um bloco de código que poder ser usada repetidamente em um programa
 * A mesma não será executada automaticamente quando uma página for carregada
 * Uma função é executada por uma chamada para a função
 *  
 */
function writeMsg() 
{
    echo "Olá Mundo PHP !!!";
}

writeMsg();



/**
 * Informações podem ser passadas para funções por meio de argumentos
 * Argumentos são como variáveis
 *  
 */
function familyName($fName) 
{
    echo "$fName Ferreira Costa" . PHP_EOL;
}

familyName("Ythalo");
familyName("Alexandre");
familyName("Paulo");
familyName("Andreia");

echo PHP_EOL;

function familyNameTwo($fName, $year) 
{
    echo "$fName em $year" . PHP_EOL;
}

familyNameTwo("Ythalo", 1979);
familyNameTwo("Alexandre", 1983);
familyNameTwo("Paulo", 1985);
familyNameTwo("Andreia", 1987);



/**
 * A partir do PHP 7 foram adicionadas declarações de tipo
 * Agora é possivel especificar o tipo de dados esperado ao declarar uma função
 * 
 */
function sum(int $number1, int $number2) 
{
    return $number1 + $number2;
}

echo sum(10, 100);

echo PHP_EOL;

// Utilizando um parâmetro padrão
// Ao chamar a função mesmo que não seja passado um valor de argumento, ela receberá o valor padrão
function setHeight(float $height = 1.83) 
{
    echo "A minha altura é $height" . PHP_EOL;
}

setHeight(1.79);
setHeight();
setHeight(1.50);



/**
 * Retornando valores de uma função
 * 
 */
function sub(int $number1, int $number2) 
{
    $subtra = $number1 - $number2;

    return $subtra;
}

echo "100 - 90 = " . sub(100, 90) . PHP_EOL;
echo "50 - 10 = " . sub(50, 10) . PHP_EOL;
echo "100 - 1000 = " . sub(100, 1000) . PHP_EOL;



/**
 * A partir do PHP 7 também é suportado declarações do tipo de retorno
 * Para adicionar o tipo de retorno é adicionado (: e tipo)  ao fim da função
 * 
 */
function div(float $number1, float $number2) : float 
{
    return $number1 / $number2;
}

echo div(8, 4) . PHP_EOL;
echo div(50, 9);

// É possivel especificar um tipo de retorno diferente dos tipos de argumento
// Porém o resultado deve retornar conforme foi especificado o tipo de retorno
function mult(float $number1, float $number2) : int
{
    return (int)($number1 * $number2);
}

echo mult(8, 4);

echo PHP_EOL;



/**
 * Usando um argumento de passagem por referência para atualizar uma variável 
 * um argumento de função em uma referência, o operador & (ao lado da variável de argumento)
 * 
 */
function addFive(&$value) 
{
    $value += 10;
}

$num = 5;
addFive($num);

echo $num;

echo PHP_EOL;



/**
 * Funções de classiaficação (crescente e decrescente) para arrays
 * 
 */

 // ordenando o array em ordem crescente com a função sort()
 $cars = [
    'Ford',
    'BMW',
    'Ferrari'
 ];

 sort($cars);

 $carsLength = count($cars);

 for ($i = 0; $i < $carsLength; $i++) {
    echo $cars[$i] . PHP_EOL;
 }

 // ordenando o array em ordem decrescente com a função rsort()
 $numbers = [4, 6, 1, 2, 22, 11];

 rsort($numbers);

 $numbersLength = count($numbers);

 for ($i = 0; $i < $numbersLength; $i++) {
    echo $numbers[$i] . PHP_EOL;
 }

 // ordenando o array em ordem crescente de acordo com o valor, usando a função asort()
 $age = [
    'Ythalo' => 43,
    'Alexandre' => 38,
    'Paulo' => 37,
    'Andreia' => 35
 ];

 asort($age);

 foreach ($age as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
 }

// ordenando o array em ordem crescente de acordo com a chave, usando a função ksort()
$height = [
    'Dimas' => 1.84,
    'Carlos' => 1.83,
    'Roberto' => 1.81
];

ksort($height);

foreach ($height as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}

// ordenando o array em ordem decrescente de acordo com o valor, usando a função arsort()
$fruits = [
    'Manga' => 5,
    'Banana' => 6,
    'Maça' => 4,
    'Melancia' => 7
];

arsort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}

// ordenando o array em ordem decrescente de acordo com a chave, usando a função krsort()
$fruits = [
    'Manga' => 5,
    'Banana' => 6,
    'Maça' => 4,
    'Melancia' => 7
];

krsort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " -> " . $value . PHP_EOL;
}



/**
 * Expressão regulares (regex) é uma sequência de caracteres que forma um padrão de pesquisa
 * 
 * Podem ser usadas para executar todos os tipos de pesquisa de texto e operações de substituição de texto. 
 * 
 */

 // preg_match_all() - função que dirá quantas correspondências foram encontradas para um padrão de string
 $str = "Eu sou a ressurreição e a vida. Quem crê em mim, ainda que morra, viverá"; 
 $pattern = "/em/i";

 echo preg_match_all($pattern, $str) . PHP_EOL;

 // preg_replace() - função que substitui todas as correspondências do padrão em uma string por outra string
 $str = "Visite a documentação php.net";
 $pattern = "/php.net/i";

 echo preg_replace($pattern, "PHP FIG", $str) . PHP_EOL;

 // preg_match() - função que informa se uma string contém correspondencias de um padrão
 $str = "Visite a documentação php.net";
 $pattern = "/php.net/i";
 
 echo preg_match($pattern, $str) . PHP_EOL;

 $str2 = "Maça e BANANA";
 $pattern2 = "/ba(na){2}/i";

var_dump(preg_match($pattern2, $str2));
