<?php
//Nome
$nome = ' Elias Gomes!';
//Idade
$dataNascimento = '2008-08-14';
$nascimento = new DateTime($dataNascimento);
$hoje = new DateTime(date('Y-m-d'));
$idade = $nascimento->diff($hoje);
//Cidade
$cidade = ' São-Paulo';
//Operação Matemática
$operacaoMatematica = 2 * 6
?>


<h1<?php echo $nome; ?>></h1>
Mora na Cidade de: <?php echo $cidade; ?></p>
Tem: <?php echo $idade->y . " anos!";
?></p>
Operação Matemática (2 x 6): <?php echo $operacaoMatematica; ?></p>