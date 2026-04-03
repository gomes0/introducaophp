<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário INSS</title>
</head>

    <body>

        <?php
            //salario q o usuário vai informar
            $salarioBase = floatval($_POST["salario"]);

            //tabela do inss
            $faixas = 
            [
                ['limite' => 1621.01, 'aliquota' => 0.075],
                ['limite' => 2902.85, 'aliquota' => 0.09],
                ['limite' => 4354.28, 'aliquota' => 0.12],
                ['limite' => 7786.02, 'aliquota' => 0.14]
            ];

            $teto = 7786.02;
            $totalDesconto = 0;
            $baseAnterior = 0;

            $salarioBase = min($salarioBase, $teto);

            foreach ($faixas as $faixa) 
            {
                if ($salarioBase > $baseAnterior) 
                {
                    $valorNaFaixa = min($salarioBase, $faixa['limite']) - $baseAnterior;
                    $totalDesconto += $valorNaFaixa * $faixa['aliquota'];
                    $baseAnterior = $faixa['limite'];
                } else 
                {
                    break;
                }
            }

            $desconto = round($totalDesconto, 2);

            //impressão formatada dos valores
            echo "Salário Bruto: R$ " . number_format($salarioBase, 2, ',', '.') . "<br>";
            echo "Salário Líquido: R$ " . number_format($salarioBase - $desconto, 2, ',', '.') . "<br>";
            echo "Desconto INSS: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
            
            //link voltar
            echo '<br><a href="06_desafio.html">Voltar</a>';
        ?>

    </body>

</html>