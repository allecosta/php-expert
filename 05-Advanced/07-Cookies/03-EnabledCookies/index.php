<?php

setcookie("CookieTest", "Test", time() + 3600, '/');

?>

<html>
    <body>
        <?php
        
        if (count($_COOKIE) > 0) {
            echo "Cookie habilitado.";
        } else {
            echo "Cookie não habilitado";
        }
        
        ?>
    </body>
</html>