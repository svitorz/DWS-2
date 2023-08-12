<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
</head>
<body>
    <h1>Praticando 1</h1>

    <form action="destino.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <label for="corbg">Cor Background:</label>
        <input type="color" name="corbg" id="corbg" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>  

</body>
</html>