<?php

    $nome = "Gomes";
    //Data de nascimento no formato AAAA-MM-DD
    $dataNascimento = "2008-08-14";
    $curso = "PHP Básico";

    //Calculo
    $dataAtual = new DateTime('today');
    $dataNascimentoAnos = new DateTime($dataNascimento);
    $idade = $dataAtual->diff($dataNascimentoAnos)->y;

    echo"Nome: $nome <br>",
        "Data de Nascimento: $dataNascimento Idade: $idade anos <br>",
        "Curso: $curso <br>";
?>