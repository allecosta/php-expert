<?php

/**
 * A instrução UPDATE é utilizada para ATUALIZAR os dados existentes em uma tabela.
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
    die("OPS! Ocorreu uma falha: " . $conn->connect_error);
}

// Atualizando um registro na tabela guests, quando o ID for igual a 5
$sqlQuery = "UPDATE guests SET firstname = 'Carlos' WHERE id = 5";

if ($conn->query($sqlQuery) === true) {
    echo "Registro atualizado com sucesso :)";
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
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Atualizando um registro na tabela guests, quando o ID for igual a 5
    $sqlQuery = "UPDATE guests SET lastname = 'Silva'  WHERE id = 5";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();

    echo $stmt->rowCount() . "Registro atualizado com sucesso :)";

} catch (PDOException $e) {
    echo $sqlQuery . $e->getMessage();
}

$conn = null;
