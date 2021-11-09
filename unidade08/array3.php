<?php
    $_salada = array("Laanja", "Uva", "Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "existe no array " . in_array("Abacate", $_salada); // retorna se existe no array
            echo "existe no array " . in_array("abacate", $_salada);
            echo "existe no array " . array_search("Abacate", $_salada); // retora a posição esta dentro do array
        ?>
    </body>
</html>