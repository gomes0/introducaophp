<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'escola_elias';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error) 
    {
    die('Erro na conexão');
    }

    $sql = "SELECT id, nome, idade, uf, cidade FROM alunos";
    $resultado = $conexao->query($sql);

    //Formatação em forma de CARDS do gemini
    echo "
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .card { 
            background: white; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            padding: 20px; 
            width: 250px; 
            border-top: 5px solid #007bff;
        }
        .card h3 { margin: 0 0 10px 0; color: #333; font-size: 1.2em; }
        .card p { margin: 5px 0; color: #666; font-size: 0.9em; }
        .badge { 
            background: #007bff; 
            color: white; 
            padding: 2px 8px; 
            border-radius: 4px; 
            font-size: 0.8em; 
            float: right;
        }
    </style>";

    if($resultado->num_rows > 0) {
        echo "<div class='container'>";
    
        while ($linha = $resultado->fetch_assoc()) 
        {
            echo "<div class='card'>";
            echo "<span class='badge'>ID: " . $linha['id'] . "</span>";
            echo "<h3>" . $linha['nome'] . "</h3>";
            echo "<p><strong>Idade:</strong> " . $linha['idade'] . " anos</p>";
            echo "<p><strong>Local:</strong> " . $linha['cidade'] . " - " . $linha['uf'] . "</p>";
            echo "</div>";
        }
    
        echo "</div>";
    } 
    else 
    {
        echo "<p>Nenhum registro encontrado.</p>";
    }

    $conexao->close();
?>