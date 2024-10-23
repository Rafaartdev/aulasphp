<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionais no php versão refaturada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div clas=container>

        <h1>Comandos adicionais no PHP</h1>
        <hr>
        <h2>Condicional Simples</h2>

        <?php
        $numero = 500;

        if ($numero >= 100) {
        ?> <p>0 valor da variavel é 500</p>
        <?php
        }
        ?>
        <hr>
        <h2>Condicional Composta</h2>
        <?php
        /* Controle de estoque */
        $produto = "Ultrabook";
        $qtdEmestoque = 5; //oque tem no momento
        $qtdCritica = 3; //minimo necessario
        ?>
        <h3>Produto: <?= $produto ?></h3>
        <p><b>Estoque:</b> <?= $qtdEmestoque ?></p>
        <?php
        /* Se a quantidade em estoque for abaixo da quantidade critic, osistema deve avisar e pedir pra repor. */

        if ($qtdEmestoque < $qtdCritica) {
        ?>
            <p class='alert alert-danger'>É necessario repor!</p>
        <?php
        } else {
        ?>
            <!-- Caso contrario, simplesmente avisar que o estoque está normal.  -->
            <p class='alert alert-success'>Estoque normal.</P>
        <?php
        }
        ?>
        <hr>
        <h2>Condicional Encadeada</h2>
        <?php
        /* Verificandoo produto e determinando diferentes periodos de garantia (em anos). */
        if ($produto == "Ultrabook") {
            $garantia = 5;
        } elseif ($produto == "Geladeiras") {
            $garantia = 3;
        } elseif ($produto == "tv") {
            $garantia = 2;
        } else {
            $garantia = 1;
        }
        ?>
        <p><?= $produto ?> tem garantia de <b> <?= $garantia ?> anos</b></p>
        <hr>

        <h2>Condicional Encadeada usando Swit/case</h2>

        <?php
        switch ($produto) {
            case "ultrabook":
                $garantiaB = 5;
                break;
            case "Geladeira":
                $garantiaB = 3;
                break;
            case "tv":
                $garantiaB = 2;
                break;
            default:
                $garantiaB = 1;
                break;
        }
        ?>
        <p>Garantia de <?= $garantiaB ?> anos.</p>




    </div>



</body>

</html>