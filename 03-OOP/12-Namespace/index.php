<?php

use App\Row;
use App\Table;


/**
 * Qualquer código que segue uma declaração namespace, está operando dentro do namespace . . .
 * Portanto, as classes que pertecem ao namespace podem ser instanciadas sem nenhum qualificador
 * Para acessar classes de fora de um namespace, a classe precisa ter o namespace anexado a ela.
 * 
 */

$table = new App\Table();
$table->title = "de informações";
$table->numRows = 1;

$row = new App\Row();
$row->numCells = 3;

?>

<html>
    <body>
        <?php 
        
        $table->message();
        $row->message(); 
        
        ?>
        <table border="3">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>José</td>
                    <td>Santos</td>
                    <td>(21) 3215-5375</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>

