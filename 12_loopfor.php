<html lang="pt-br">
    <head>

    </head>
    <body>

        <?php 

            /* Declaração variaveis */
            $tabuada = 5;

            /* Loop for */
            for($contador = 1; $contador <= 10; $contador++) 
            {
                /* Logica da tabuada */
                $resultado = $tabuada * $contador;

                /* Impressão da tabuada (sem formatação) */
                echo "$tabuada x $contador = $resultado\n";
            }

        ?>

    </body>
    
</html>