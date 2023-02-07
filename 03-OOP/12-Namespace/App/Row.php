<?php

namespace App;

/**
 * Namespaces são qualificadores que resolvem dois problemas:
 * 
 * 1- Permitem uma melhor organização agrupando classes que trabalham juntas para realizar uma tarefa
 * 2- Permitem que o mesmo nome seja usado para mais de uma classe
 */
class Row 
{
    public $numCells = 0;

    public function message() 
    {
        echo "<p>Existem somente {$this->numCells} células(s).</p>";
    }
}