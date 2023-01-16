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

$sql = "INSERT INTO guests (firstname, lastname, email) VALUES ('Joao', 'Santos', 'joao@hostmail.com');";
$sql .= "INSERT INTO guests (firstname, lastname, email) VALUES ('Maria', 'Ribeiro', 'maria123@hostmail.com');";
$sql .= "INSERT INTO guests (firstname, lastname, email) VALUES ('Jose', 'Barros', 'jose@hostmail.com')";

// verificando se foi inserido os três registros no database
if ($conn->multi_query($sql) === true) {
    echo "Novos registros criado com sucesso";
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

    // iniciando a transação
    $conn->beginTransaction();

    // executando a query
    $conn->exec("INSERT INTO guests (firstname, lastname, email) VALUES ('Carlos', 'Santos', 'carlos@hostmail.com')");
    $conn->exec("INSERT INTO guests (firstname, lastname, email) VALUES ('Nina', 'Tavares', 'nina@hostmail.com')");
    $conn->exec("INSERT INTO guests (firstname, lastname, email) VALUES ('Julia', 'Carvalho', 'julia@hostmail.com')");
    $conn->commit();

    echo "Novos registros realizado com sucesso!";

} catch (PDOException $e) {
    
    // revertendo a transação se algo falhar
    $conn->rollBack();

    echo "OPS! Ocorreu um erro: " . $e->getMessage();
}

$conn = null;



