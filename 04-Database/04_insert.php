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

// inserindo dados no database
$sql = "INSERT INTO guests (firstname, lastname, email) VALUES ('Carlos', 'Santos', 'csantos@hostmail.com')";

if ($conn->query($sql) === true) {
    echo "Novo registro realizado com sucesso!";
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

    // inserindo dados no database
    $sql = "INSERT INTO guests (firstname, lastname, email) VALUES ('Andre', 'Costa', 'andre@hostmail.com')";
    $conn->exec($sql);

    echo "Novo registro realizado com sucesso!";

} catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;