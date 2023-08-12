<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Praticando 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <h1 class="border-bottom p-3">Praticano 1 - Calculadora de média escolar.</h1>

  <form action="destino.php" method="post">
    <div class="input-group mb-3">
      <label for="nota1" class="input-group-text">NOTA 1:</label>
      <input type="number" name="nota1" id="nota1" min="0" max="10" placeholder="Insira uma nota de 0 a 10" pattern="[0-9]+$" required class="form-control">
    </div>
    <div class="input-group mb-3">
      <label for="nota2" class="input-group-text">NOTA 2:</label>
      <input type="number" name="nota2" id="nota2" min="0" max="10" placeholder="Insira uma nota de 0 a 10" pattern="[0-9]+$" required class="form-control">
    </div>
    <div class="input-group mb-3">
      <label for="nota3" class="input-group-text">NOTA 3:</label>
      <input type="number" name="nota3" id="nota3" min="0" max="10" placeholder="Insira uma nota de 0 a 10" pattern="[0-9]+$" required class="form-control">
    </div>
    <button type="submit" class="btn btn-success">CALCULAR MÉDIA</button>
    <button type="reset" class="btn btn-warning">LIMPAR</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>