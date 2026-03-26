<?php
    $horaEntrada = "08:30";
    $horaSaida = "17:45";
    
    //Calculo
    $entrada = new DateTime($horaEntrada);
    $saida = new DateTime($horaSaida);
    $duracao = $saida->diff($entrada);

    echo "Hora de Entrada: $horaEntrada <br>",
         "Hora de Saída: $horaSaida <br>",
         "Duração do Trabalho: ".$duracao->h." horas e ".$duracao->i." minutos.";
?>