<!DOCTYPE html>
<html lang"pt-br">

    <head>
        <meta charset="UTF-8"
        <title>Curso de PHP</title>
    </head>
    <body>
        <p>
            Olá, hoje é dia 
            <?php 
                //date_default_timezone_set('America/Sao_Paulo');
                print date ('d/m/y');

                //Aspas Simples, utilizado apenas para textos simples
                $teste = 1;
                echo 'A caixa D\'água esta vazia.\\'.'$teste';
                echo '<p>A caixa d\'água está vazia.\\'.$teste; //Concatenação

                //Aspas dupla são processadas. Por isso permite mais recursos 
                $litros = '1000L';
                echo "\nA caixa d'água é de $litros";

            ?>
        </p>
    </body>
</html>