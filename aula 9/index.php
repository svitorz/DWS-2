<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 1</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="p-4 border-bottom">Tabuada</h1>
    <div class="container d-flex"></div>
    <form action="destino.php" method="get">
        <div class="input-group">
            <label for="val" class="input-group-text">Insira um número:</label>
            <input type="number" name="val" id="val">
        </div>
        <div class="p-3">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </form>

    <script src="/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>
</html>