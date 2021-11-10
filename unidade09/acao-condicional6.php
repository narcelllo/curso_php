<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            $dia = "domingo";
            $idade = 18;
            $sexo = "feminino";

            if($dia == "sabado" || $dia == "domingo"){
                echo "fim de semana!";
            } else {
                echo "dia de semana";
            }

            if($odade >= 18 && $sexo == "feminino"){
                echo "pode entrar na festa";
            } else {
                echo "festa apenas para mulheres!";
            }

            

        ?>
    </body>
</html>