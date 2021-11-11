<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($salario, $dias) {
            return number_format( $salario/$dias, 2);
        }

        echo retornarDiaria(2500, 30) . "</br>";
        echo retornarDiaria(5500, 25) . "</br>";
    ?>
</body>
</html>