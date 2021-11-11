<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        function converterfc($temperatura){
            return ($temperatura * 1.8) + 32;
        }

        echo converterfc(32);
    ?>

    <?php
        function converterCf($temperatura){
            return ($temperatura - 32) / 1.8;
        }

        echo converterCf(32);
    ?>
</body>
</html>