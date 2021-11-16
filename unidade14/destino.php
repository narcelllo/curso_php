<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <pre>
            <?php
                if(isset($_POST["nome"])==true){
                    $nome = $_POST["nome"];
                } else {
                    $nome = "Sem definição";
                }

                if(isset($_POST["email"])==true){
                    $email = $_POST["email"];
                } else {
                    $email = "Sem definição";
                }


                echo "Email: " . $email;
            ?>
        </pre>
    </body>
</html>