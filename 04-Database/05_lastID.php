<?php

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

$sql = "INSERT INTO guests (firstname, lastaname, email) VALUES ('Jose', 'Santos', 'jose@hostmail.com')";

if ($conn->query($sql) === true) {

    // obtendo o ID do ultimo registro no database
    $lastID = $conn->insert_id;

    echo "Sucesso! Ultimo ID: " . $lastID;

} else {
    echo "OPS! Ocorreu um erro: " . $sql . $conn->error;
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
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO guests (firstname, lastname, email) VALUES ('Maria', 'Santos', 'maria123@hostmail.com')";
    $conn->exec($sql);

    // obtendo o ID do ultimo registro no database
    $lastID = $conn->lastInsertId();

    echo "Sucesso! Ultimo ID: " . $lastID;

} catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;
