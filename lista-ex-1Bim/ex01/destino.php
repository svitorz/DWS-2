<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTINO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <?php
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
    $texto = filter_input(INPUT_POST, "texto", FILTER_SANITIZE_SPECIAL_CHARS);
    $cortexto = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $url_img = filter_input(INPUT_POST, "url_img", FILTER_SANITIZE_SPECIAL_CHARS);
    $url_link = filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS);
    $corbg = filter_input(INPUT_POST, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <h1 class="p-4 border-bottom">
        <!-- Variavel imprime o valor inserido no formulario -->
        <?= $title; ?>

    </h1>

    <p class="fs-3 p-2">
        <?= $texto; ?>
    </p>

    <img class="ps-5 img-fluid" src="<?php echo $url_img; ?>">

    <a href="<?= $url_link; ?>"
        class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
        <?= $url_link; ?> </a>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" href="/lista-ex-1Bim">
            Voltar á página inicial
        </a>
    </div>

    <style>
        body {
            background-color:
                <?= $corbg; ?>
            ;
        }

        h1,
        p {
            color:
                <?= $cortexto; ?>
            ;
        }

        a {
            color:
                <?= $cortexto; ?>
            ;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>