<?php
    $alunos = [
    [
        'João',
        18,
        'Marília',
        true
    ],
    [
        'Maria',
        19,
        'Vera Cruz',
        true
    ],
    [
        'Antonio',
        35,
        'Pompeia',
        false
    ]
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        
    <body>

        <?php 
            for($i = 0; $i < count($alunos); $i++)
            {
                if($alunos[$i][3])
                {
                    echo 
                    " Nome: " .$alunos[$i][0],
                    " Idade: " .$alunos[$i][1],
                    " Cidade: " .$alunos[$i][2];
                    
                    echo "<hr>";
                }
            }
        ?>

    </body>
    
</html>