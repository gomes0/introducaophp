<?php
    $nomes = ['Ana', 'Carlos', 'Maria']
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        <
    <body>

        <?php 

            foreach($nomes as $nome)
            {
                echo "$nome<br>";   
            }
            for($i=0; $i < count($nomes); $i++)
            {
                echo "$nome[$i]<br>";
            }
        ?>

    </body>
    
</html>