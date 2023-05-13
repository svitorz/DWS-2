<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body>
<h1 class="border-bottom p-3">Exercício 2 - Contador aprimorado:</h1>
<form action="destino.php" method="post">
    <div class="d-flex justify-content-center py-4">
        <div class="input-group">
            <label for="valor_inicial" class="input-group-text">Valor inicial:</label>
            <input type="number" name="valor_inicial" id="valor_inicial">
        </div>
        <div class="input-group">
            <label for="valor_final" class="input-group-text">Valor final:</label>
            <input type="number" name="valor_final" id="valor_final">
        </div>
        <div class="input-group">
            <label for="valor_incremento" class="input-group-text">Valor incremento:</label>
            <input type="number" name="valor_incremento" id="valor_incremento">
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</form>
<script src="../../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>