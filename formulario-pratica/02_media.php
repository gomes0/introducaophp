<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Média</title>
</head>

    <body>

        <?php

            //notas
            $nota1 = floatval($_POST["nota1"]);
            $nota2 = floatval($_POST["nota2"]);
            $nota3 = floatval($_POST["nota3"]);

            //total
            $total = $nota1 + $nota2 + $nota3;

            //média
            $media = $total / 3;

            //situação
            $situacao = "";
            if($media >= 7)
            {
                $situacao = "Aprovado";
            }
            elseif($media >= 5)
            {
                $situacao = "Recuperação";
            }
            else
            {
                $situacao = "Reprovado";
            }

            echo "<h2>Dados Recebidos</h2>";
                        
            //impressão
            echo "Total: " . number_format($total, 2) . "<br>";
            echo "Média: " . number_format($media, 2) . "<br>";
            echo "Situação: ".$situacao."<br><br>";

            //link voltar
            echo '<a href="02_media.html">Voltar</a>';
            
        ?>

    </body>

</html>