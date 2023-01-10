<?php

namespace App;

class Table 
{
    public $title = "";
    public $numRows = 0;

    public function message() 
    {
        echo "<p>Essa tabela '{$this->title}' tem {$this->numRows} linha(s).</p>";
    }
}



