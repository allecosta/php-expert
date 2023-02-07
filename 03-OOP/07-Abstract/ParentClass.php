<?php

abstract class ParentClass 
{
    abstract protected function prefixName($name); 
}


class ChildClass extends ParentClass 
{
    public function prefixName($name, $separator = ".", $greet = "Dear") 
    {
        if ($name == "Paul Mccartney") {
            $prefix = "Sr";
        } elseif ($name == "Lisa Mccartney") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }

        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$child = new ChildClass();

echo $child->prefixName("Paul Mccartney") . PHP_EOL;
echo $child->prefixName("Lisa Mccartney");