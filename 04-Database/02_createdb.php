<?php

/**
 * MySQLi - Orientado a Objetos
 * 
 */
$serverName = "localhost";
$userName = "user_name";
$password = "pass01";
// $port = 3306; caso seja necessario especificar uma porta

$conn = new mysqli($serverName, $userName, $password);

if ($conn->connect_error) {
    die("OPS! Falha na conexão: " . $conn->connect_error);
}

// criando o database
$sql = "CREATE DATABASE db_myDB";

if ($conn->query($sql) === true) {
    echo "Banco de dados criado com sucesso!";
} else {
    echo "OPS! Falha na criação do banco de dados." . $conn->error;
}

// caso seja necessario especificar, pois toda conexão é automaticamente encerrada ao final do script
$conn->close(); 



/**
 * PDO - PHP Data Objects
 * 
 */
$serverName = "localhost";
$userName = "user_name02";
$password = "pass02";

try {
    $conn = new PDO("mysql:host=$serverName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // criando o database
    $sql = "CREATE DATABASE db_myDB";
    $conn->exec($sql);

    echo "Banco de dados criado com sucesso!";

} catch(PDOException $e) {
    echo $sql . $e->getMessage();
}

// caso seja necessario especificar, pois toda conexão é automaticamente encerrada ao final do script
$conn = null; 


