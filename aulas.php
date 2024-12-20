<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário HTML</h1>
    <hr>

    <form autocomplete="off" method="post" action="processamento.php">
        <p>
            <label for="nome">Nome:</label>
            <input placeholder="Digite o seu nome" required type="text" name="nome" id="nome">
        </p>
        
		<p>
            <label for="email">E-mail:</label>
            <input required type="email" name="email" id="email">
        </p>

		<p>
            <label for="nascimento">Data de nascimento:</label>
            <input type="date" name="nascimento" id="nascimento">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>


</body>
</html>