<?php

/**
 * Para remover todas as variáveis de sessão global e destruir a sessão use:
 * 
 * session_unset() e session_destroy().
 */

session_start();

?>

<html>
    <body>
        <?php

        // Remove todas as variáveis de sessão
        session_unset();

        // Destroi a sessão
        session_destroy();

        ?>
    </body>
</html>