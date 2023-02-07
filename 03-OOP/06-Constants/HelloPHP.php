<?php

// acessando uma constante dentro da classe
class HelloPHP 
{
    const NEW_MESSAGE = "Bem vindo a nova versão do PHP 8";

    public function message() 
    {
        echo self::NEW_MESSAGE;
    }
}

$hello = new HelloPHP();
$hello->message();