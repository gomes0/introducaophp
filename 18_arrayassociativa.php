<?php
    $produtos = [
    'nome' => 'Notebook',
    'preco' => 2500.00,
    'estoque' => 10,
    'disponivel' => true];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        
    <body>

        <?php 
            if($produtos['disponivel'])
            {
                echo "Nome: $produtos[nome] Preço: R$".number_format($produtos['preco'], 2, ',', '.') . " Estoque: $produtos[estoque]";
            }
        ?>

    </body>
    
</html>