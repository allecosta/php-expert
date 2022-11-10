<?php 

/**
 * Array (matriz indexada) - Estrutura de dados que armazena valores em uma única variável,  
 * 
 */
$cars = [
    'Ford',
    'BMW',
    'Ferrari',
];

echo "Minha lista de carros -> " . $cars[0] . ", " . $cars[1] . " e " . $cars[2] . PHP_EOL;

// verificando o número de elementos do array
$arrLength = count($cars);

// percorrendo o array com for
for ($i = 0; $i < $arrLength; $i++) {
    echo $cars[$i] . PHP_EOL;
}



/**
 * Array (matriz associativa) - Estrutura de dados ondde atribuimos chaves nomeadas 
 * 
 */
$age = [
    'Ythalo' => 42,
    'Alexandre' => 38,
    'Paulo' => 37,
    'Andreia' => 35
];

// percorrendo o array com foreach()
foreach ($age as $key => $value) {
    echo "Key = " . $key . ", Value = " . $value . PHP_EOL;
}



/**
 * Array (matrizes multidimensionais) - Estrutura de dados que contem mais de um array 
 * 
 * Bidimensional - É necessario dois indices para acessar um elemento
 * Tridimensional - É necessario três indices para acessar um elemento
 * 
 */
$cars = [
    ['Ford', 22, 18],
    ['BMW', 15, 13],
    ['Ferrari', 17, 15]
];

echo $cars[0][0] . " em estoque: " . $cars[0][1] . ", vendido: " . $cars[0][2] . PHP_EOL;
echo $cars[1][0] . " em estoque: " . $cars[1][1] . ", vendido: " . $cars[1][2] . PHP_EOL;
echo $cars[2][0] . " em estoque: " . $cars[2][1] . ", vendido: " . $cars[2][2] . PHP_EOL;

// percorrendo o array bidimensional
for ($row = 0; $row < 3; $row++) {
    echo "linha {$row}" . PHP_EOL;

    for ($column = 0; $column < 3; $column++) {
        echo $cars[$row][$column] . PHP_EOL;
    }
}




