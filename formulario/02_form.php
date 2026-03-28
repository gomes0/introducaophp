<!DOCTYPE html>
    <html lang="pt-br">
 
        <head>
            <meta charset="UTF-8">
            <title>Formulário</title>
        </head>

        <body>

            <?php 

                //isset(): Verifica se a variavel existe e se ela é diferente de null.
                //$_POST: Recupera o valor de uma variavel do formulario
                if(isset($_POST["nome"]))
                {
                    $nome = $_POST["nome"];
                    $idade = $_POST["idade"];

                    echo "<h2>Dados Recebidos</h2>";
                    echo "Nome: ". $nome. "<br>";
                    echo "Idade: ". $idade. "<br><br>";

                    //Incluir o link voltar
                    echo '<a href="02_form.html">Voltar</a>';
                }
                else
                {
                    //Incluir o Else, caso a variavel nome não wxista ou esteja nula
                    echo "Acesso inválido";
                }

             ?>

        </body>

    </html>