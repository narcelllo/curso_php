<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $contador = 1;
        
        while($contador > 5 ){
            //$contador = $contador + 1;
            $contador ++;
            echo $contador;
        }
        
        while($contador < 10 ){
            $sortear = rand(1, 100);
            $contador ++;
            echo $contador . "</br>";
            echo $sortear;
        }

    ?>
</body>
</html>