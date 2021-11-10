<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $numero1 = 5;
            $numero2 = "5";

            if($numero1 == $numero2){ // usando apenas "==" na comparação 
                //ele considera que são ambos numeros iguais se usar "===" sera análizado o valor e o tipo.
                echo "são números iguais";
            } else {
                echo "não são números iguais";
            }

        ?>
    </body>
</html>