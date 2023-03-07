<?php require_once 'cookie.php'; ?>

<html>
    <body>
        <?php 
        
        if (!isset($_COOKIE[$cookieName])) {
            echo "Cookie '" . $cookieName . "' não definido.";
        } else {
            echo "Cookie '" . $cookieName . "' definido.<br/>";
            echo "Valor: " . $_COOKIE[$cookieName];
        }

        ?>
    </body>
</html>