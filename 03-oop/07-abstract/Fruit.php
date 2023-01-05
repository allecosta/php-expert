<?php

abstract class fruit 
{
    abstract protected function prefixFruit($name);
}


class Apple extends Fruit 
{
    public function prefixFruit($name) 
    {
        if ($name == "Maça") {
            $prefix = "Fr.";
        } elseif ($name == "Maças") {
            $prefix = "Frs.";
        } else {
            $prefix = "";
        }

        return "{$prefix} {$name}";
    }
}

$apple = new Apple();

echo $apple->prefixFruit("Maça") . PHP_EOL;
echo $apple->prefixFruit("Maças");
