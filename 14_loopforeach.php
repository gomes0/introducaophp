<?php
    $cidades = array('São Paulo','Marília','Lins','Vera Cruz','Santos')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    </head>
        
    <body>

        <?php 
            foreach($cidades as $cidade)
            {
                echo "$cidade<br>";
            }
            for($i=0; $i < count($cidades); $i++)
            {
                echo "$cidades[$i]<br>";
            }
            
        ?>

    </body>
    
</html>