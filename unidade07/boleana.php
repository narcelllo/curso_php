<?php
    $fumante = true;
    //$fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "É Fumante?" . $fumante . "</br>";
            echo "É Booleano?" . is_bool($fumante);
        ?>
    </body>
</html>