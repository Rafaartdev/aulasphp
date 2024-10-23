<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01.php</title>

</head>


<body>
    
    <div class="container">
        <h1>nome do usuário</h1>
        <?php
        $dados = [
            "nome" => "Chapolin Colorado",
            "cidade"  => "São Paulo",
            "idade" => 21,
            "telefones" => ["1198744311","1155432268" ],
            "Senha" => "4588"

        ];
       ?> 
       <ol>
            <li> <?=$dados["nome"]?></li>
            <li> <?=$dados["idade"]?> anos </li>
            <li> <?=$dados["cidade"]?></li>
            <li> <?=$dados["telefones"][1]?></li>
            
            </ol>    
          <h2>Versão DE SAIDA USANDO ARREYS NUMERICO/IDEXADO </h2>


<ol>
<li>nome: <?=$dados["nome"]?></li>
<li>idade: <?=$dados["idade"]?></li>
<li>cidade: <?=$dados["cidade"]?></li>
<li>telefones:<?=$dados["telefones"][1]?></li>


</ol>
    </div>
</body>

</html>