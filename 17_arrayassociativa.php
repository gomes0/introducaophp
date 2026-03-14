<?php
    $alunos = [
    'nome' => 'João',
    'idade' => 18, 
    'cidade' => 'São Paulo', 
    'ativo' => true];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        
    <body>

        <?php 
            if($alunos['ativo'])
            {
                echo "Nome: $alunos[nome] Idade: $alunos[idade] Cidade: $alunos[cidade].";
            }
        ?>

    </body>
    
</html>