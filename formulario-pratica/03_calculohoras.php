<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Média</title>
</head>

    <body>

        <?php

            //hora q o usuario vai informar
            $horaEntrada = $_POST["horaEntrada"];
            $horaSaida = $_POST["horaSaida"];

            //conta
            $entrada = new DateTime($horaEntrada);
            $saida = new DateTime($horaSaida);
            $duracao = $saida->diff($entrada);

            //impressão
            echo "Hora de Entrada: $horaEntrada <br>",
            "Hora de Saída: $horaSaida <br><br>",
            "Duração do Trabalho: ".$duracao->h.":".$duracao->i." horas <br>";     

            //link voltar
            echo '<a href="03_calculohoras.html">Voltar</a>';
            
        ?>

    </body>

</html>