<?php

    $consulta = [
        "CEP" => "12345-678",
        "Rua" => "Av. Independência",
        "Número" => 82,
        "Bairro" => "Palmital",
        "Cidade" => "Marília",
        "UF" => "SP"
    ];

    foreach($consulta as $chave => $valor)
    {
        echo $chave . ": " . $valor . "<br>";
    }

?>