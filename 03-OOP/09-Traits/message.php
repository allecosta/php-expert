<?php

/**
 * O PHP suporta apenas herança única: uma classe filha pode herdar apenas de um único pai.
 * 
 * Traits são usados para declarar métodos que podem ser usados em várias classes
 * Traits podem ter métodos abstratos que podem ser usados em várias  classes
 * E os métodos podem ter qualquer modificador de acesso (public, protected ou private).
 * 
 */
trait messageOne 
{
    public function msgOne() 
    {
        echo "PHP Orientado a Objetos.";
    }
}


class Welcome 
{
    // importando a traits para classe Welcome
    use messageOne;
}

$msg = new Welcome();
$msg->msgOne();
