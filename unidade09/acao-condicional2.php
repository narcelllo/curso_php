<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $dia = "quarta";

            switch($dia){
                case "segunda":
                    echo "hoje é segunda";
                    break;
                case "terça":
                    echo "hoje é terça";
                    break;
                case "quarta":
                    echo "hoje é quarta";
                    break;
                case "quinta":
                    echo "hoje é quinta";
                    break;
                case "sexta":
                    echo "hoje é sexta";
                    break;
                default:
                    echo "fim de semana!";
                    //break; opcional na ultima validação
            }

        ?>
    </body>
</html>