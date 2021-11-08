<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre" . $salario * $meses . "</br>";
            echo "Quinzena" . $salario /2 . "</br>";

            // Exponencial
            echo "Raiz quadrada: " . pow(6,3) . "</br>";

            // Raiz Quadrada

            // Randômico Generica
            echo "Randomico: " . rand(1,5) . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(5,10) . "</br>";
            
            // Valor absoluto
            echo "Valor absoluto" . abs(-50);
            
        ?>
    </body>
</html>