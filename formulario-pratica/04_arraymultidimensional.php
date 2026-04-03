<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Estados</title>
</head>

    <body>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                //array multidimensional
                $uf = $_POST['uf'];
                $estados = $_POST['nome'];

                //array multidimensional
                $listaEstados = [];

                for ($i = 0; $i < count($uf); $i++) 
                {
                    $listaEstados[] = 
                    [
                        "uf" => strtoupper($uf[$i]),
                        "estado" => mb_strtoupper($estados[$i], 'UTF-8')
                    ];
            }

            //impressão
            echo "<h1>Lista de Estados Cadastrados</h1>";
    
            foreach ($listaEstados as $item) 
            {
                echo "<p>" . $item['uf'] . " - " . $item['estado'] . "</p>";
            }

            //link voltar
            echo '<br><a href="04_arraymultidimensional.html">Voltar</a>';
            }
        ?>

    </body>

</html>