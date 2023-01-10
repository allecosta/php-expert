<?php

/**
 * Propriedades estáticas podem ser invocadas diretamente sem precisar criar uma instância de uma classe.
 * 
 */
class PI 
{
    public static $value = 3.14159;
}

echo PI::$value;