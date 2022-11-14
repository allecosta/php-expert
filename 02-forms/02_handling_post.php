<?php

/**
 * Quando o usuário preenche o formulário e clica no botão enviar, 
 * os dados são enviados para processamento do PHP
 * 
 * Neste caso os dados estão sendo enviado com HTTP via metodo POST
 * 
 * $_POST é uma variável array que é passada no script.
 */

?>


<html>
    <body>

        <?php
        
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['pass'];

            // validação das informações
            if (empty($username) || empty($password)) {
                echo "O campo de usuario ou senha não estão preenchidos!";
            } else {
                echo "Username: {$_POST['username']} <br>";
                echo "Senha: {$_POST['pass']}";
            }   
        }

        ?>

        <form action="" method="POST">
            <label>
                Usuário <input type="text" name="username">
            </label><br><br>
            <label>
                Senha <input type="password" name="pass">
            </label><br><br>

            <input type="submit" value="enviar">
        </form>
    </body>
</html>