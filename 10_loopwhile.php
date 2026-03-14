<!DOCTYPE html>
    <html lang="pt-br">
 
        <head>
            <meta charset="UTF-8">
            <title>Curso de PHP</title>
        </head>
        <body>
            <?php
                $i = 1;
                while($i <=5){
                    echo "$i<br>";
                    $i++;
                }
            ?>
        </body>
    </html>
 
10 
<!DOCTYPE html>
    <html lang="pt-br">
 
        <head>
            <meta charset="UTF-8">
            <title>Curso de PHP</title>
        </head>
        <body>
            <?php
                $num_par = 0;
                while($num_par <= 20){
                   
                    if($num_par % 2 == 0){
                        echo "$num_par<br>";
                    }
                   
                    $num_par++;
                }
            ?>
        </body>
    </html>
 