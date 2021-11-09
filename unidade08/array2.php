<?php
    $megasena = array(47, 29, 42, 04, 27, 21);

    sort($megasena);
    //rsort($megasena); maior para o menos
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo min($megasena);
            echo max($megasena);
        ?>
        <pre>
            <?php 
                print_r($megasena);
            ?>
        </pre>
    </body>
</html>