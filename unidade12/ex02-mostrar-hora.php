<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Brazil/east');
            $_agora = getdate();
            
            $segundo = $_agora["seconds"];
            $minuto = $_agora["minutes"];
            $hora = $_agora["hours"];

            $dia = $_agora["mday"];
            $mes = $_agora["mon"];
            $ano = $_agora["year"];

            echo $hora . ":" . $minuto . ":" . $segundo . " - " . $dia ."/". $mes ."/". $ano; 
        ?>
    </body>
</html>