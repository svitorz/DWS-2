<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <?php

    $color = filter_input(INPUT_GET, "color", FILTER_SANITIZE_SPECIAL_CHARS);
    $align = filter_input(INPUT_GET, "align", FILTER_SANITIZE_EMAIL);
    $size = filter_input(INPUT_GET, "size", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>
    <h1 class="border-bottom ps-5 py-4"> Exercício 2 - Formatador de texto. </h1>
    <div class="container">

        <div class="contaiener border-bottom">
            <p class="ps-1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias pariatur eaque porro earum. Beatae
                voluptatum facere hic dicta numquam officiis illo, excepturi sit id minus autem, error et reprehenderit.
                Tempore?
            </p>
            <br>
            <p class="ps-1">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid aliquam earum necessitatibus vero
                iusto assumenda, quia saepe quaerat dolores reprehenderit voluptate nisi! Vero modi cum repellendus
                fugiat provident magni repudiandae?
            </p>
        </div>


        <h2>Controles</h2>
        <div class="container py-3">
            Cor do textos dos parágrafos
            <a href="index.php?color=coral&align=<?= $align ?>&size=<?= $size; ?>">
                <button type="button" class="btn btn-danger">
                    Vermelho
                </button>
            </a>

            <a href="index.php?color=lightgreen&align=<?= $align ?>&size=<?= $size; ?>">
                <button type="button" class="btn btn-success">
                    Verde
                </button>
            </a>

            <a href="index.php?color=lightblue&align=<?= $align ?>&size=<?= $size; ?>">
                <button type="button" class="btn btn-primary">
                    Azul
                </button>
            </a>

        </div>
        <br>
        <div class="container py-3">
            Alinhamento dos textos dos parágrafos
            <a href="index.php?color=<?= $color; ?>&align=right&size=<?= $size; ?>">
                <button type="button" class="btn btn-secondary">
                    Direita
                </button>
            </a>

            <a href="index.php?color=<?= $color; ?>&align=center&size=<?= $size; ?>">
                <button type="button" class="btn btn-secondary">
                    Centro
                </button>
            </a>

            <a href="index.php?color=<?= $color; ?>&align=left&size=<?= $size; ?>">
                <button type="button" class="btn btn-secondary">
                    Esquerda
                </button>
            </a>

        </div>
        <br>

        <div class="container py-3">
            Tamanho da fonte dos textos dos parágrafos
            <a href="index.php?color=<?= $color; ?>&align=<?= $align; ?>&size=smaller">
                <button class="btn btn-primary btn-sm">
                    Pequena
                </button>
            </a>
            <a href="index.php?color=<?= $color; ?>&align=<?= $align; ?>&size=medium">
                <button class="btn btn-primary">
                    Média
                </button>
            </a>
            <a href="index.php?color=<?= $color; ?>&align=<?= $align; ?>&size=larger">
                <button class="btn btn-primary btn-lg">
                    Grande
                </button>
            </a>
        </div>
    </div>

    <style>
        p {
            font-size:
                <?= $size; ?>
            ;
            color:
                <?= $color; ?>
            ;
            text-align:
                <?= $align; ?>
            ;
        }
    </style>

<div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" href="/lista-ex-1Bim">
            Voltar á página inicial
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>