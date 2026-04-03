<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Idade</title>
</head>

    <body>

        <?php
    
            if(isset($_POST["nome"]))
                {
                    //variáveis
                    $nome = $_POST["nome"];
                    $dataNascimento = $_POST["dataNascimento"];
                    $curso = $_POST["curso"];
                    $nascimento = new DateTime($dataNascimento);
                    $hoje = new DateTime();

                    //calculo da idade
                    $idade = $hoje->diff($nascimento);

                    //impressão
                    echo "<h2>Dados Recebidos</h2>";
                    echo "Nome: ". $nome. "<br>";
                    echo "Idade: ". $idade->y . " Anos ".$meses = $idade->m . " Meses e ".$dias = $idade->d . " Dias <br>";
                    echo "Curso: ".$curso."<br><br>";

                    //link voltar
                    echo '<a href="01_idade.html">Voltar</a>';
                }
                else
                {
                    echo "Acesso inválido";
                }
                

            
        ?>

    </body>

</html>