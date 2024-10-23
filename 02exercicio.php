<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>aumento de salário</h1>
<hr>
<p>  salario </p>
    <?php
$salario = 1000;
if( $salario < 500 ){
   $novoSalario = $salario * 1.15; //15%
} elseif( $salario <= 1000 )
{$novoSalario = $salario *1.10; //10%
} else {
$novoSalario = $salario *1.05; //5% 
}
?>
<p>salário antigo: <?=$salario?></p>
<p>salário reajustado <?=$novoSalario?></p>
<p> salario antigo: R$ 400 
  <p>novo salario :R$ </p>
</p>
<hr>









</body>
</html>