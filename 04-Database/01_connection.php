<?php

// MySQli - Orientado a Objetos
$serverName = "localhost";
$userName = "user_name";
$password = "pass_0101";
$dbName = "db_";

// criando a conexão
$conn = new mysqli($serverName, $userName, $password, $dbName);

// verificando a conexão
if ($conn->connect_error) {
    die("OPS! Falha na conexão: " . $conn->connect_error);
} 
    
echo "Conexão realizada com sucesso!";

// caso seja necessario encerrar a conexão antes do final do script
$conn->close();



// PDO - PHP Data Objects
$serverName = "localhost";
$userName = "user_name";
$password = "pass_0101";
$dbName = "db_";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão realizada com sucesso";

} catch(PDOException $e) {
    echo "OPS! Falha na conexão: " . $e->getMessage();
}

// caso seja necessario encerrar a conexão antes do final do script
$conn = null;