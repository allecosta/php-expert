<html>
    <style>
        .error {
            color: red;
        }
    </style>
    <body>
        <h2>PHP Form Validation</h2>
        <p><span class="error">* Campo obrigatorio</span></p>

        <?php 
        
        $nameError = $emailError = $genderError = $websiteError = "";
        $name = $email = $gender = $website = $comment = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['name'])) {
                $nameError = "É obrigatorio o preenchimento do nome";
            } else {
                $name = testInput($_POST['name']);
            }

            if (empty($_POST['email'])) {
                $emailError = "É obrigatorio o preenchimento do email";
            } else {
                $email = testInput($_POST['email']);
            }

            if (empty($_POST['gender'])) {
                $genderError = "É obrigatorio o preenchimento do gênero";
            } else {
                $gender = testInput($_POST['gender']);
            }

            if (empty($_POST['website'])) {
                $websiteError = "É obrigatorio o preenchimento do website";
            } else {
                $website = testInput($_POST['website']);
            }

            if (empty($_POST['comment'])) {
                $comment = "";
            } else {
                $comment = testInput($_POST['comment']);
            }
        }

        // função para verificação dos dados enviado no formulario
        function testInput($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);

            return $data;
        }

        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label>
                Nome: <input type="text" name="name">
                <span class="error">* <?= $nameError; ?></span>
            </label><br><br>
            <label>
                Email: <input type="text" name="email">
                <span class="error">* <?= $emailError; ?></span>
            </label><br><br>
            <label>
                Website: <input type="text" name="website">
                <span class="error">* <?= $websiteError; ?></span>
            </label><br><br>
            <label>
                Comentarios: <textarea name="comment" cols="40" rows="5"></textarea> 
            </label><br><br>
            <label>
                Gênero: 
                <input type="radio" name="gender" value="Feminino">Feminino
                <input type="radio" name="gender" value="Masculino">Masculino
                <input type="radio" name="gender" value="Outros">Outros
                <span class="error">* <?= $genderError; ?></span>
            </label><br><br>

            <input type="submit" name="submit" value="submit">
        </form>

        <?php 
        
        echo "<h2>Informações:</h2>";
        echo "Nome: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . $website . "<br>";
        echo "Comentario: " . $comment . "<br>";
        echo "Gênero: " . $gender . "<br>";

        ?>
        
    </body>
</html>