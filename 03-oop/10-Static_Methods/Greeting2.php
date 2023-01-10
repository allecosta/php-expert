<?php

/**
 * Uma classe pode ter métodos estáticos e não estáticos ao mesmo tempo
 * Um método estático pode ser acessado a partir de um método na mesma classe
 * 
 * Métodos estáticos também podem ser invocados por métodos em outras classes.
 * 
 */
class Greeting2 
{
    public static function welcome() 
    {
        echo "PHP Orientado a Objetos" . PHP_EOL;
    }

    public function __construct()
    {
        self::welcome();
    }
}

//new Greeting2();


class SomeOtherClass 
{
    public function message() 
    {
        Greeting2::welcome();
    }
}
