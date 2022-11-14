<?php

/**
 * Quando o usuário preenche o formulário e clica no botão enviar, 
 * os dados são enviados para processamento do PHP
 * 
 * Neste caso os dados estão sendo enviado com HTTP via metodo GET
 * 
 * $_GET é uma variável array que é passsado no script via parametros da URL.
 */

?>

<html>
    <body>

        <?php 

        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $email = $_GET['email'];

        }
        
        ?>

        <form action="" method="GET">
            <label>
                Nome: <input type="text" name="name">
            </label><br><br>
            <label>
                Email: <input type="text" name="email">
            </label><br><br>

            <input type="submit" value="Enviar">
        </form>

    </body>
</html>
