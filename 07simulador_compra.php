<?php

//Nome do Produto
$nome = 'Microondas';

//Valor Unitário do Produto
$valor = 80.00;

//Quantidade
$quantidade = 7;

//Total Sem Desconto
$totalSDesconto = $valor * $quantidade;

//Variáveis de controle
$totalCompra = $totalSDesconto;
$descontoValor = 0;

//Estrutura Condicional
if ($totalCompra >= 200.00) 
   {
    //Calcula 10% de desconto
    $descontoValor = $totalCompra * 0.10;
    $totalCompra = $totalCompra - $descontoValor;
   }
elseif ($totalCompra >= 100.00) 
   {
    //Calcula 5% de desconto
    $descontoValor = $totalCompra * 0.05;
    $totalCompra = $totalCompra - $descontoValor;
   }
?>

<h1><?php echo $nome; ?></h1>
<hr>
<h2>Valor Unitário: R$ <?php echo number_format($valor, 2, ',', '.'); ?></h2>
<h2>Quantidade: <?php echo $quantidade; ?></h2>
<h2>Total sem desconto: R$ <?php echo number_format($totalSDesconto, 2, ',', '.'); ?></h2>
<h2>Desconto: R$ <?php echo number_format($descontoValor, 2, ',', '.'); ?></h2>
<hr>
<h2>Total Final: R$ <?php echo number_format($totalCompra, 2, ',', '.'); ?></h2>