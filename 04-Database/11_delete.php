<?php

/**
 * A instrução DELETE é utilizada para excluir dados de uma tabela.
 * 
 */

/**
 * MySQLi - Orientado a Objetos
 * 
 */
$serverName = "localhost";
$userName = "user_01";
$password = "pass01";
$dbName = "db_myDB";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die("OPS! Ocorreu um erro: " . $conn->connect_error);
}

// Excluido da tabela customers quando o ID for igual a 5
$sqlQuery = "DELETE FROM customers WHERE id = 5";

if ($conn->query($sqlQuery) === true) {
    echo "Registro excluido com sucesso :)";
} else {
    echo "OPS! Ocorreu um erro: " . $conn->error;
}

$conn->close();



 /**
 * PDO - PHP Data Objects
 * 
 */
$serverName = "localhost";
$userName = "user_01";
$password = "pass01";
$dbName = "db_myDB";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Excluido da tabela customers quando o ID for igual a 5
    $sqlQuery = "DELETE FROM customers WHERE id = 5";
    $conn->exec($sqlQuery);

    echo "Registro excluido com sucesso :)";

} catch (PDOException $e) {
    echo $sqlQuery . $e->getMessage();
}

$conn = null;