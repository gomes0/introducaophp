<?php

function calcularINSS($salarioBruto) {
    // Tabela de alíquotas 2024 (Exemplo)
    $faixas = [
        ['limite' => 1412.00, 'aliquota' => 0.075],
        ['limite' => 2666.68, 'aliquota' => 0.09],
        ['limite' => 4000.03, 'aliquota' => 0.12],
        ['limite' => 7786.02, 'aliquota' => 0.14]
    ];

    $teto = 7786.02;
    $totalDesconto = 0;
    $baseAnterior = 0;

    // Se o salário for maior que o teto, usamos o teto
    $salarioBase = min($salarioBruto, $teto);

    foreach ($faixas as $faixa) {
        if ($salarioBase > $baseAnterior) {
            // Calcula quanto do salário está dentro desta faixa específica
            $valorNaFaixa = min($salarioBase, $faixa['limite']) - $baseAnterior;
            $totalDesconto += $valorNaFaixa * $faixa['aliquota'];
            $baseAnterior = $faixa['limite'];
        } else {
            break;
        }
    }

    return round($totalDesconto, 2);
}

// Exemplo de uso:
$salario = 4668.00;
$desconto = calcularINSS($salario);

echo "Salário Bruto: R$ " . number_format($salario, 2, ',', '.') . PHP_EOL;
echo "Desconto INSS: R$ " . number_format($desconto, 2, ',', '.') . PHP_EOL;