<?php 
    $pc = array("processador", "memoria", "ssd", "fonte");
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
           echo $pc[0] . "</br>";
           echo $pc[1] . "</br>";
           echo $pc[2] . "</br>";
           echo $pc[3] . "</br>";
           $pc[] = "placa Mae";
           echo $pc[4] . "</br>";
           echo count($pc) . "</br>";
        ?>

        <?php 
            print_r($pc);
        ?>
    </body>
</html>