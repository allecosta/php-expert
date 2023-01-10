<?php

/**
 * Métodos estáticos podem ser invocados diretamente, sem precisar criar uma instância da classe.
 * 
 */
class Greeting 
{
    public static function welcome() 
    {
        echo "Olá Mundo PHP!!";
    }
}

Greeting::welcome();