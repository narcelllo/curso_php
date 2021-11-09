<?php
    $nome = "Marcello";
    $telefone = "15-99677-1544";
    $fumante = true;
    $nula = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo isset($nome) . "</br>";
            echo isset($telefone) . "</br>";
            echo isset($email) . "</br>";
            echo isset($fumante) . "</br>";
            echo isset($nula);
        ?>
    </body>
</html>