<?php require_once 'poll.php'; ?>

<html>
    <body>
        <h2>Resultado:</h2>
        <table>
            <tr>
                <td>Sim:</td>
                <td>
                    <img src="poll.gif" width="<?= 100 * round($yes / ($no + $yes), 2); ?>" height="20">
                    <?= (100 * round($yes / ($no + $yes), 2)); ?>%
                </td>
            </tr>
            <tr>
                <td>Não:</td>
                <td>
                    <img src="poll.gif" width="<?= 100 * round($no / ($no + $yes), 2); ?>" height="20">
                    <?= (100 * round($no / ($no + $yes),2)); ?>%
                </td>
            </tr>
        </table>
    </body>
</html>