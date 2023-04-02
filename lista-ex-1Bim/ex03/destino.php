<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praticando 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
<?php
 
    $color = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);
    $img = filter_input(INPUT_GET, "img", FILTER_SANITIZE_SPECIAL_CHARS);
    $text = filter_input(INPUT_GET, "text", FILTER_SANITIZE_SPECIAL_CHARS);

?>

    <h1>Exercício 3 - Lampada (maldita) liga/desliga com PHP</h1>
      <a href="destino.php?color=black&img=img/lampada.png&text=white">Apagar</a>
    <div class="container d-flex justify-content-center">
        <img src= <?= $img; ?> >
    </div>
        <a href="destino.php?color=white&img=img/lampada-acesa.png&text=black">Acender</a>

    <style>
        body {
          color: <?= $text; ?>;
          background-color: <?= $color; ?>;           
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>