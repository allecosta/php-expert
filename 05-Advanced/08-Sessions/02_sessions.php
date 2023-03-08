<?php

/**
 * Aqui recuperamos os valores da página anterior (01_sessions.php), com a função session_start().
 */

session_start();

?>

<html>
    <body>
        <?php

        echo "Meu clube favorito se chama " . $_SESSION['favclub'] . "<br />";
        echo "E o meu jogador favorito é " . $_SESSION['favplayer'];

        // print_r($_SESSION);

        ?>
    </body>
</html>