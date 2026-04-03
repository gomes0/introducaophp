<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário CEPs</title>
</head>

    <body>

        <?php

            //array
            $consulta = 
            [
                "CEP" => $_POST["cep"],
                "Rua" => $_POST["rua"],
                "Bairro" => $_POST["bairro"],
                "Cidade" => $_POST["cidade"],
                "UF" => $_POST["uf"],
            ];
            
            echo "<h2>Dados Informados:</h2>";

            //impressão
            foreach($consulta as $chave => $valor)
            {
                echo $chave . ": " . implode(", ", $valor) . "<br>";
            }
            
            //link voltar
            echo '<br><a href="05_arrayassociativo.html">Voltar</a>';
            
        ?>

    </body>

</html>