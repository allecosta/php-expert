<?php 

/**
 * $_REQUEST é uma variável super global que é usada para coletar dados após o envio do formulário HTML
 * 
 */

?>

<html>
    <body>
        
        <?php 
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_REQUEST['fname'];

            if (empty($name)) {
                echo "OPS! O campo nome está vazio.";
            } else {
                echo $name;
            }
        }

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>
                Nome: <input type="text" name="fname">
            </label>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>