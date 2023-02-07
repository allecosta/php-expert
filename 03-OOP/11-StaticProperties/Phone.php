<?php

/**
 * Uma classe pode ter propriedades estáticas e não estáticas ao mesmo tempo
 * Uma propriedade estática pode ser acessada de um método na mesma classe.
 * 
 */
class Phone 
{
    public static $number = "(79) 9 8134-0000";

    public function phoneNumber() 
    {
        return self::$number;
    }
}

$phone = new Phone();

echo $phone->phoneNumber();