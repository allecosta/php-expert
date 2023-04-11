<?php 

// Verificando se uma variável é do tipo inteiro em um range entre 100 e 300
$int = 166;
$min = 100;
$max = 300;

$arrRange = [
    'options' => ['min_range' => $min, 'max_range' => $max]
];

$range = filter_var($int, FILTER_VALIDATE_INT, $arrRange);

if ($range === false) {
    echo "OPS! O valor $int não está dentro da faixa legal." . PHP_EOL;
} else {
    echo "O valor $int está dentro da faixa ." . PHP_EOL;
}

// Verificando se a variável ip é um endereço IPv6 válido
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo "O IP $ip é um endereço IPv6 válido." . PHP_EOL;
} else {
    echo "OPS! Este IP $ip não é um endereço IPv6 válido." . PHP_EOL;
}

// Verificando se a variável url é uma URL com uma querystring
$url = "https://www.php.net";

if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo "$url é uma URL com query string." . PHP_EOL;
} else {
    echo "OPS! $url não é uma URL com queru string." . PHP_EOL;
}

// Removendo todos os caracteres com valor ASCII maior que 127
$str = "Hello WorldÆØÅ!";

$newStr = filter_var($str, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);

echo $newStr;

