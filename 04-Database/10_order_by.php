<?php

/**
 * A cláusula ORDER BY é utilizada para classificar o conjunto de resultados em ordem crescente ou descrente.
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
    die("OPS! Falha na conexão: " . $conn->connect_error);
}

// Seleciona as colunas ID, firstname e lastname, ordenados pela coluna firstname de forma decrescente
$sqlQuery = "SELECT id, firstname, lastname FROM guests ORDER BY firstname DESC";
$result = $conn->query($sqlQuery);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['firstname'] . "<br>";
        echo "Sobrenome: " . $row['lastname'];
    }
} else {
    echo "Nenhum resultado!";
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

    //Seleciona todos as colunas da tabela Customers, classificados em ordem crescente por country e decrescente por customerName
    $stmt = $conn->prepare("SELECT * FROM customers ORDER BY country ASC, customerName DESC");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $key => $value) {
        echo $value;
    }

} catch (PDOException $e) {
    echo "OPS! Ocorreu um erro: " . $e->getMessage();
}

$conn = null;

