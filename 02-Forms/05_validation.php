<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <h2>Formulario de Validação de URL | Nome | Email com PHP</h2>
        <p><span class="error">* campo obrigatorio</span></p>

        <?php

        $nameError = $emailError = $genderError = $websiteError = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['name'])) {
                $nameError = "O campo name é obrigatorio!";
            } else {
                $name = testInput($_POST['name']);

                // verifica se o nome contém apenas letras e espaços em branco
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameError = "Permitido apenas letras e espaços!";
                }
            }

            if (empty($_POST['email'])) {
                $emailError = "O campo email é obrigatorio!";
            } else {
                $email = testInput($_POST['email']);

                // verifica a formatação do email digitado
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "Email inválido!";
                }
            }

            if (empty($_POST['website'])) {
                $website = "";
            } else {
                $website = testInput($_POST['website']);

                // verifica se a sintax do endereço da URL é válida
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteError = "URL inválida!";
                }
            }

            if (empty($_POST['comment'])) {
                $comment = "";
            } else {
                $comment = testInput($_POST['comment']);
            }

            if (empty($_POST['gender'])) {
                $genderError = "É necessario escolher o gênero!";
            } else {
                $gender = testInput($_POST['gender']);
            }
        }

        function testInput($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);

            return $data;
        }

        ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
                Comentários: <textarea name="comment" cols="40" rows="5"></textarea>
            </label><br><br>
            <label>
                Gênero: 
                <input type="radio" name="gender" value="Feminino">Feminino
                <input type="radio" name="gender" value="Maculino">Masculino
                <input type="radio" name="gender" value="Outros">Outros
                <span class="error">* <?= $genderError; ?></span>
            </label><br><br>
            <input type="submit" name="submit" value="Enviar">
        </form>

        <?php 
        
        echo "<h2>Informações:<h2>";
        echo "Nome: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . $website . "<br>";
        echo "Comentário: " .$comment . "<br>";
        echo "Gênero: " . $gender . "<br>";

        ?>
    </body>
</html>