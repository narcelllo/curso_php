<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $agenda = array("nome" => "marcello",
                        "numero" => 9999,
                        "salario" => 1200.00);
        
        foreach($agenda as $contato => $valor) {
            echo $contato . ": " . $valor . "</br>";
        }
        
    ?>
</body>
</html>