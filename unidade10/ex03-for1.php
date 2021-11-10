<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        for($contador = 0; $contador <= 10; $contador ++) {
            $sorteio = rand(1,100);
            echo $sorteio;
        }                  

    ?>
</body>
</html>