<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Tipo Dados - Exoplanetas</title>
</head>

    <body>

        <?php
    
            echo "<h1>Sinal Recebido</h1>";

            //captura de dados espaciais
            $sonda = htmlspecialchars($_POST['sonda_nome'] ?? 'Sonda Anônima');
            $massa = $_POST['massa_planeta'] ?? 'Desconhecida';
            $cor_sol = $_POST['cor_estrela'] ?? '#FFFFFF';
    
            //tempos e prazos
            $data_obs = $_POST['data_avistamento'] ?? 'N/A';
            $alinhamento = $_POST['alinhamento_dt'] ?? 'N/A';
    
            //seleções e listas
            $tipo = $_POST['composicao'] ?? 'Indefinida';
            $elementos = isset($_POST['elementos']) ? implode(", ", $_POST['elementos']) : 'Nenhum traço químico detectado';

            //saida 
            echo "<b>Sonda Originária:</b> " . $sonda . "<br>";
            echo "<b>Massa do Planeta:</b> " . $massa . " Tierras<br>";
            echo "<b>Tipo de Planeta:</b> " . $tipo . "<br>";
            echo "<b>Elementos Químicos:</b> " . $elementos . "<br>";
            echo "<b>Data da Observação:</b> " . $data_obs . "<br>";
            echo "<b>Próxima Janela de Alinhamento:</b> " . $alinhamento . "<br>";
            echo "<b>Assinatura Espectral da Estrela:</b> <span style='color:$cor_sol'>$cor_sol</span><br>";

            echo "<br><br><a href='03_tiposdedados.html'>Nova Exploração</a>";
            
        ?>

    </body>

</html>