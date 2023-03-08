<?php

/**
 * Uma sessão é uma maneira de armazenar  informações em variáveis para serem usadas em várias páginas
 * Ao contrário de um cookie, as informações não são armazenadas no computador do usuário
 * 
 * Uma sessão é iniciada com a função session_start()
 * As variáveis são definidas com a variável global $_SESSION.
 */

session_start();

?>

<html>
    <body>
        <?php

        $_SESSION['favclub'] = "CR Vasco da Gama";
        $_SESSION['favplayer'] = "Roberto Dinamite";

        echo "Variáveis de sessão definidas com sucesso";

        ?>
    </body>
</html>