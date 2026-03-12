<?php

    $nome = 'Elias';
    $idade = 17;
    $cidade = 'Marilia';
    $curso = 'Técnico em Desenvolvimento de Sistemas';

?>

<!DOCTYPE html>
<html lang"pt-br">

    <head>
        <meta charset="UTF-8"
        <title>Alunos</title>
    </head>
    <body>
        <p>
            <?php 
                echo "<br>Nome: $nome";
                echo "<br>Idade: $idade";
                echo "<br>Cidade: $cidade";
                echo "<br>Curso: $curso";
            ?>
        </p>
    </body>
</html>
