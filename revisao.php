<?php include "recursosexternos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Revisando o Basico</h1>
    <hr>

    <ul>
        <?php  foreach($tecnologias as $tec){?>
        <li> <?=$tec?></li> <?php } ?>
    </ul>


    <hr>
    <?php
    /*criar duas variáveis e /ou constantes*/ 
    const NOME = "Chapolin Colorado";
    $idade = 25;

    /*EXIBIR NO HTMl uma frase da seguinte forma*/
    /* Olá meu nome é Chapolin Colorado e tenho 25 anos.*/
// Desafios: 
//O nome deve aparecer em italico e com  cor diferente no texto
// a idade deve aparecer apenas com a cor de fimdo diferente 
 
    ?>
    
    <p>Olá! meu nome é <i class="text-danger"><?=NOME?></i> e temho
     <span class= "bg-warning"><?=$idade?></span> anos.
    </p>

 

    
</body>
</html>