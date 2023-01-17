<?php

/**
 * A instrução SELECT é usada para selecionar dados de uma ou mais tabelas.
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

$sql = "SELECT id, firstname, lastname FROM guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['firstname'] . "<br>";
        echo "Sobrenome: " . $row['lastname'];
    } 

} else {
    echo "Sem resultados!";
}

$conn->close();



/**
 * PDO - PHP Data Objects
 * 
 */
$serverName = "localhost";
$userName = "user_02";
$password = "pass02";
$dbName = "db_myDB";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName". $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM guests");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $stmt->fetchAll()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['firstname'] . "<br>";
        echo "Sobrenome: " . $row['lastname'];
    }
} catch (PDOException $e) {
    echo "OPS! Ocorreu um erro: " . $e->getMessage();
}

$conn = null;

