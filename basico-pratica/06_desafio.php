<?php

function calcularINSS($salarioBruto) {
    //tabela de alíquotas 2024
    $faixas = [
        ['limite' => 1621.01, 'aliquota' => 0.075],
        ['limite' => 2902.85, 'aliquota' => 0.09],
        ['limite' => 4354.28, 'aliquota' => 0.12],
        ['limite' => 7786.02, 'aliquota' => 0.14]
    ];

    $teto = 7786.02;
    $totalDesconto = 0;
    $baseAnterior = 0;

    //se o salário for maior que o teto, usamos o teto
    $salarioBase = min($salarioBruto, $teto);

    foreach ($faixas as $faixa) {
        if ($salarioBase > $baseAnterior) 
        {
            //calcula quanto do salário está dentro desta faixa específica
            $valorNaFaixa = min($salarioBase, $faixa['limite']) - $baseAnterior;
            $totalDesconto += $valorNaFaixa * $faixa['aliquota'];
            $baseAnterior = $faixa['limite'];
        }
         else 
        {
            break;
        }
    }

    return round($totalDesconto, 2);
}

//exemplo de uso:
$salario = 4668.00;
$desconto = calcularINSS($salario);

echo "Salário Bruto: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Desconto INSS: R$ " . number_format($desconto, 2, ',', '.') . "<br>";