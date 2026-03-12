<?php

    $nome = "Carlos"; //String
    $idade = 20; //int
    $altura = 1.75; //double
    $ativo = true;

?>

<!DOCTYPE html>
<html lang"pt-br">

    <head>
        <meta charset="UTF-8"
        <title>Declaração de Variáveis</title>
    </head>
    <body>
        <p>
            <?php 
                echo "<br>Nome: $nome";
                echo "<br>Idade: $idade";
            ?>
        </p>
    </body>
</html>