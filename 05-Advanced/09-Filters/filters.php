<?php

/**
 * Filtros são usados para validar e sanitizar entradas de dados externos
 *
 * Dados externos devem sempre ser validados, como por exemplo:
 * 
 * 1- Entrada do usuário por um formulário
 * 2- Cookies
 * 3- Dados de serviços da web
 * 4- Variáveis do servidor
 * 5- Resultados de consulta do banco de dados
 */

 // A função filter_list() poder ser usada para listar o que a extensão de filtro oferece
 foreach (filter_list() as $id => $filter) {
    echo "ID: " . filter_id($filter) . "\n";
    echo "Nome: " . $filter . "\n\n";
 }

 // A função filter_var() valida e higieniza os dados
 // Sanitizando e validando um endereço de email
 $email = "bob@example.com";
 $newEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
 
 if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
   echo "$newEmail este endereço de email é valido!" . PHP_EOL;
 } else {
   echo "$newEmail este endereço de email NÃO é valido!" . PHP_EOL;
 }

 // Validando se um número é do tipo inteiro
 $int = 1024;

 if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
   echo "O valor informado é um inteiro valido!" . PHP_EOL;
 } else {
   echo "O valor informado NÃO é um inteiro valido!" . PHP_EOL;
 }

 // Validando um valor inteiro com 0 (zero)
 $int = 0;
 
 if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
   echo "O valor informado é um inteiro valido!" . PHP_EOL;
 } else {
   echo "O valor informado NÃO é um inteiro valido!" . PHP_EOL;
 }

 // Validando um endereço IP
 $ip = "127.0.0.1";

 if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
   echo "$ip é um IP valido!" . PHP_EOL;
 } else {
   echo "$ip este IP não é valido!" . PHP_EOL;
 }

 // Sanitizando e validando uma URL
 $url = "http://www.php.net";
 $newURL = filter_var($url, FILTER_SANITIZE_URL);

 if (!filter_var($newURL, FILTER_VALIDATE_URL) === false) {
   echo "$newURL é uma URL valida!" . PHP_EOL;
 } else {
   echo "$newURL NÃO é uma URL valida!" . PHP_EOL;
 }

 
