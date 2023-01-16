<?php

/**
 * Vantagens de se utilizar instruções preparadas (Prepared):
 * 
 * 1 - Reduz o tempo de análise, pois a preparação da consulta é feita apenas uma vez, embora a instrução
 * seja executada várias vezes.
 * 
 * 2 - Os parâmetros vinculados minimizam a largura de banda para o servidor, pois necessita enviar apenas
 * os parâmetros de cada vez, e não toda consulta.
 * 
 * 3 - Úteis contra SQL injection, porque os valores de parâmetro não precisam ser escapados, se o modelo
 * de instrução original não for derivado de uma entrada externa, o injection não poderá ocorrer.
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

// preparando e vinculando os parâmetros
$stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email); // argumento sss -> informa ao mysql que os parâmetros serão strings

// setando os parâmetros e executando
$firstname = "Carlos";
$lastname = "Santos";
$email = "carlos@hostmail.com";
$stmt->execute();

$firstname = "Jose";
$lastname = "Santos";
$email = "jose@hostmail.com";
$stmt->execute();

echo "Novo registro realizado com sucesso";

$stmt->close();
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

    // preparando e vinculando os parâmetros
    $stmt = $conn->prepare("INSERT INTO guests (firstname, lastname, email) 
        VALUES (:firstname, :lastname, :email)
    ");

    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // setando os parâmetros e executando
    $firstname = "João";
    $lastname = "Barros";
    $email = "joao@hostmail.com";
    $stmt->execute();

    $firstname = "Sandra";
    $lastname = "Tavares";
    $email = "sandra@hostmail.com";
    $stmt->execute();

    echo "Novo registro realizado com sucesso!";

} catch (PDOException $e) {
    echo "OPS! Ocorreu um erro: " . $e->getMessage();
}

$conn = null;


