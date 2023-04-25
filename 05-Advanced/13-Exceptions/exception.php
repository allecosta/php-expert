<?php

/**
 * Exceptions são objetos que descreve um erro ou comportamento inesperado de um script PHP
 * São lançadas por muitas funções e classes, inclusive funções e classes definidas pelo usuário
 * As exceções são uma boa maneira de interromper uma função quando ela encontra dados que não podem ser usados.
 * 
 * Quando uma exceção é lançada, o código seguinte não será executado
 * Se uma exceção não for capturada, ocorrerá um error fatal com a seguinte mensagem "Uncaught Exception".
 */

 //Lançando uma exceção com a instrução throw
 function divide($dividend, $divisor) 
 {
    if ($divisor == 0) {
        throw new Exception("Divisão por 0 (zero).");
    }

    return $dividend / $divisor;
 }

 echo divide(10, 0);



/**
 * O bloco catch indica que tipo de exceção deve ser capturada e o nome da variável que será utilizada para acessar a exceção
 * Neste exemplo abaixo, o tipo de exceção é a Exception e a variável é $e.
 */

 // Capturando exceções com a instrução try...catch
 function divide($dividend, $divisor) 
 {
    if ($divisor == 0) {
        throw new Exception("Divisão por 0 (zero).");
    }

    return $dividend / $divisor;
 }

 try {
    echo divide(10, 0);
 } catch (Exception $e) {
    echo "Não é possivel realizar uma divisão por 0 (zero).";
 }



/**
 * A instrução try...catch...finally poder ser utilizada para capturar exceções
 * O código no bloco finally sempre será executado, independentemente de uma exceção ter sido capturada. 
 */

 // Mostrando uma mensagem quando uma exceção é lançada e encerrando o processo
 function divide($dividend, $divisor) 
 {
    if ($divisor == 0) {
        throw new Exception("Divisão por 0 (zero).");
    }

    return $dividend / $divisor;
 }

 try {
    echo divide(10, 0);
 } catch (Exception $e) {
    echo "Não é possivel realizar uma divisão por 0 (zero).";
 } finally {
    echo " Processo encerrado!";
 }



/**
 * O objeto Exception contém informações sobre o erro ou comportamento inesperado que a função encontrou
 * Os métodos abaixo são utlizados para obter informações sobre a exceção capturada:
 * 
 * getMessage(), getCode(), getFile() e getLine().
 */

 // Visualizando informações sobre uma exceção que foi lançada
function divide($dividend, $divisor) 
{
    if ($divisor == 0) {
        throw new Exception("Divisão por 0 (zero).");
    }

    return $dividend / $divisor;
}

try {
    echo divide(10, 0);
} catch (Exception $e) {
    $message = $e->getMessage();
    $code = $e->getCode();
    $file = $e->getFile();
    $line = $e->getLine();

    echo "Exceção lançada em $file na linha $line: [Cod. $code] $message";
} 



