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
        $nomecliente = [
            "nome" => "Chapolin Colorado",
            "cidade"  => "São Paulo",
            "idade" => 21,
            "telefones" => ["1198744311","1155432268" ],
            "Senha" => "4588"

        ];
       ?> 
       <ol>
            <li> <?= $nomecliente["nome"] ?>  </li>
            <li> <?=$nomecliente["idade"]?></li>
            <li> <?=$nomecliente["cidade"]?></li>
            <li> <?=$nomecliente["telefones"]?></li>
            <li> <?=$nomecliente["Senha"]?></li>
            
            

   
      
</ol>
    </div>
</body>

</html>