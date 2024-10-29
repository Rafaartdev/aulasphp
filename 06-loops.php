<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body div class="conteiner">
<h1> Loops (ou lacos de repetiçoes)</h1>
<hr>

<h2>Tradicionais: while, for do/white</h2>

<h3>while</h3>

<?php 

$i = 1;

while($i <= 3){
?>
 <p> Senac Penha -<?=$i?></p>
<?php

$i++;
}
?>

<?php 
for($i = 1; $i <=5; $i++){
?> 
  <div>
<h4>Foto <?=$i?></h4>
<img src="https://picsum.photos/id/1/300/200" alt="">
</div>
  
<?php
}
?>

<h3>Looop tradicional para acessar Arreys</h3>

<?php
$alunos = ["Roney", "Adriano", "Maria", "Silas"];

for( $i = 0; $i < count($alunos); $i++ ){
?>
    <p class="alert alert-success">
    <?=$alunos[$i]?>
</p>
<?php
}
?>
<hr>
<h2>Especifico: foreach</h2>
<?php
foreach( $alunos as $aluno ){
?>
<p class="alert alert-danger"> 
<?=$aluno?>
</p>
<?php
}
?>
</div>
</body>
</html>