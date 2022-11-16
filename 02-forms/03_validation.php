<html>
    <body>
        <h2>Formulario de Validação com PHP</h2>

        <?php 
        
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = testInput($_POST['name']);
            $email = testInput($_POST['email']);
            $gender = testInput($_POST['gender']);
            $comment = testInput($_POST['comment']);
            $website = testInput($_POST['website']);
        }

        function testInput($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            //$data - htmlspecialchars($data);

            return $data;
        }

        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label>
                Nome: <input type="text" name="name">
            </label><br><br>
            <label>
                Email: <input type="text" name="email">
            </label><br><br>
            <label>
                Website: <input type="text" name="website">
            </label><br><br>
            <label>
                Comentarios: <textarea name="comment" cols="40" rows="5"></textarea>
            </label><br><br>
            <label>
                Gênero:
                <input type="radio" name="gender" value="Feminino">Feminino
                <input type="radio" name="gender" value="Masculino">Masculino
                <input type="radio" name="gender" value="Outros">Outros
            </label><br><br>

            <input type="submit" value="Enviar">
        </form>

        <?php 
        
        echo "<h2>Informações:</h2>";
        echo $name . "<br>";
        echo $email . "<br>";
        echo $website . "<br>";
        echo $comment . "<br>";
        echo $gender . "<br>";

        ?>
        
    </body>
</html>