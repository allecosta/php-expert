<?php 

/**
 * $_GET é uma variável super global que é usada para coletar dados de formulário HTML com o metodo GET
 * 
 * Também pode coletar dados enviados via URL.
 * 
 */

?>

<html>
    <body>
        <?php 
        
        echo "Eu estudo " . $_GET['subject'] . " via " . $_GET['web'];

        // Paramentro definido (?subject=PHP&web=web) na URL -> http://localhost:8000/14_get.php?subject=PHP&web=web

        ?>
    </body>
</html>