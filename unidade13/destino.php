<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            $salada = array("imagem/laranja.jpg", "imagem/maca.jpg", "imagem/bacate.jpg");
            $codigo = $_GET["codigo"];
        ?>

        <img src="<?php echo $salada[$codigo] ?>">
    </body>
</html>