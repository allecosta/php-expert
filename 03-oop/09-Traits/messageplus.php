<?php

trait messageOne 
{
    public function msgOne()
    {
        echo "PHP Orientado a Objetos" . PHP_EOL;
    }
}

trait messageTwo 
{
    public function msgTwo() 
    {
        echo "OOP reduz a duplicação de código";
    }
}



class Welcome
{
    use messageOne;
}

class Welcome2
{
    // importando multiplas traits
    use messageOne, messageTwo;
}

$msg = new Welcome();
$msg->msgOne();

$msg2 = new Welcome2();
$msg2->msgOne();
$msg2->msgTwo(); 

