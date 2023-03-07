<?php

setcookie("user", "", time() - 3600);

?>

<html>
    <body>
        <?php

        echo "O cookie 'user ' foi deletado.";

        ?>
    </body>
</html>