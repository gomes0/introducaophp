<?php
    $cores = array('Vermelho','Amarelo','Laranja','Verde','Roxo');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        
    <body>

        <?php 
            echo "$cores[0]<br>";
            echo "$cores[1]<br>";
            echo "$cores[2]<br>";
            echo "$cores[3]<br>";
            echo "$cores[4]<br>";

            /* Com foreach */
            foreach($cores as $cor)
            {
                echo "$cor<br>";
            }
            for($i=0; $i < count($cores); $i++)
            {
                echo "$cores[$i]<br>";
            }
        ?>

    </body>
    
</html>