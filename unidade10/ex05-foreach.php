<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_pc = array("cpu","memoria","placa mão","hd","fote");

        for($i = 0; $i <= 3; $i ++){
            echo $pc[$i] . "</br>";
        }
        // count() para buscar o numero de posições existem no array
        for($i = 0; $i <= count($pc); $i ++){
            echo $pc[$i] . "</br>";
        }

        foreach($pc as $pcs){
            echo $pcs . "</br>";
        }
        

    ?>
</body>
</html>