<?php
    $horaEntrada = "08:00";
    $horaSaida = "18:45";
    
    //Calculo
    $entrada = new DateTime($horaEntrada);
    $saida = new DateTime($horaSaida);
    $duracao = $saida->diff($entrada);

    echo "Hora de Entrada: $horaEntrada <br>",
         "Hora de Saída: $horaSaida <br>",
         "Duração do Trabalho: ".$duracao->h.":".$duracao->i." horas <br>";
?>