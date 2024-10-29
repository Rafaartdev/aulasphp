<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meses do ano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        li:nth-child(odd) {
            color: blue;
        }

        li:nth-child(evn) {
            color: brown;
        }
    </style>
</head>

<body>
    <h1>Lista de Meses</h1>

    <ol>
        <?php
        $meses = ["janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Desembro"];
        ?>
        <ol>

            <?php
            foreach ($meses as $mes) {
            ?>

                <li><?= $mes ?></li>

            <?php } ?>

        </ol>
</body>

</html>