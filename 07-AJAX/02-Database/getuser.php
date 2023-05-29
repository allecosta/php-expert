<html>
    <head>
        <style>
            table {
                width: 50%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php 
            $q = intval($_GET['q']);
            
            $conn = new mysqli("servidor", "usuario", "senha", "database");

            if ($conn->connect_error) {
                die("OPS! Falha na conexão" . $conn->connect_error);
            }

            $querySQL = "SELECT * FROM users WHERE id = '". $q ."' ";
            $result = $conn->query($querySQL);

            echo "<table>
                    <tr>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Idade</th>
                        <th>Profissão</th>
                    </tr>";

                    while ($row = $result->fetch_array()) {
                        echo "<tr>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['job'] . "</td>";
                        echo "</tr>";
                    }
            echo "</table>";

            $conn->close();
        ?>
    </body>
</html>