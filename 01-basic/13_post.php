<?php

/**
 * $_POST é uma varivável global que é usada para coletar dados do formulario HTML com o metodo POST
 * 
 * Também é amplamente usado para passar variáveis.
 * 
 */

?>

<html>
    <body>
        
        <?php 
        
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['pass'];

            if (empty($username) || empty($password)) {
                echo "OPS! É necessario o preechimento de todos os campos.";
            } else {
                echo "Usuário: " . $username . " Senha: " . $password;
            }
        }
        ?>

        <form action="echo $_SERVER['PHP_SELF']" method="POST">
            <label>
                Usuário: <input type="text" name="username">
            </label>
            <label>
                Senha: <input type="password" name="pass">
            </label>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>