<?php

/**
 * É possivel invocar uma propriedade estática de uma classe filha utilizando a palavra-chave "parent".
 * 
 */
class Phone2 
{
    public static $number = "(82) 9 9215-0000";
}


class CelPhone extends Phone2 
{
    public function celNumber() 
    {
        return parent::$number;
    }
}

// obtendo o valor da propriedade estática diretamente via classe filha
echo CelPhone::$number . "\n";

// obtendo o valor da propriedade estática via método
$cel = new CelPhone();
$cel->celNumber();