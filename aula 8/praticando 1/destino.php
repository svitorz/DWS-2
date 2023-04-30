<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php
        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_EMAIL);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS); 
        $media = $nota1 + $nota2 + $nota3 / 3;

        if($media<4){
            $situacao = "REPROVADO";
            $cor = "red;";
        } else {
            if($media>=4 && $media<6){
                $situacao = "EM RECUPERAÇÃO";
                $cor = "#FF4500;";
            }else{
                $situacao = "APROVADO";
                $cor = "green;";
            }
        }
    ?>
    <h1 class="border-bottom p-4">Calculadora de notas:</h1>
    <p class="p-3">Um aluno com as notas <?= $nota1; ?>, <?= $nota2; ?> e <?= $nota3; ?> tem a média de <?= $media; ?> </p>

    <p class="p-3">Com essa média o aluno está <span class="decoracao"> <?= $situacao; ?> </span> </p>

        <style>
            .decoracao {
                color: <?= $cor; ?>;
                text-decoration-line: underline;
            }

        </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>