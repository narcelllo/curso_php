<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $contador = 0;
        
        do {
            $sortear = rand(1,100);
            echo $sortear . "</br>";
            $contador ++;

        } while($contador <= 10)
        
    ?>
</body>
</html>