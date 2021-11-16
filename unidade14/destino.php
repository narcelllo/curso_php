<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <pre>
            <?php
                /* if(isset($_POST["nome"])==true){
                    $nome = $_POST["nome"];
                } else {
                    $nome = "Sem definição";
                } */

                $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";

                /* if(isset($_POST["email"])==true){
                    $email = $_POST["email"];
                } else {
                    $email = "Sem definição";
                } */
                $email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";


                echo "Email: " . $nome, $email;
            ?>
        </pre>
    </body>
</html>