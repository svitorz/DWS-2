<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTINO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <H1 class="border-bottom p-4 my-2">Destino</H1>

    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $corbg = filter_input(INPUT_GET, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome</p>";
    echo "<p>E o email foi: $email</p>"
    ?>
    <br>
    <p>
        <a class="py-4 pe-3 nav-link" href="destino-get.php?nome=Vitor&email=vitor@gmail.com&corbg=<?= $corbg; ?>" >
            Enviar dados nome=Vitor e Email=vitor@gmail.com!
        </a>
        <a class="py-4 pe-3 nav-link" href="destino-get.php?nome=Joao&email=joaozinhoreidelas@gmail.com&corbg=<?= $corbg; ?>">
            Enviar dados nome=Joao e Email=joaozinhoreidelas@gmail.com!
        </a>

        <a href="destino-get.php" class="nav-link py-4">
            Limpar tudo!
        </a>
    </p>
<div class="container row">
<a href="destino-get.php?corbg=lightcoral&nome=<?= $nome; ?>&email=<?= $email; ?>" class="col-3 me-5">   
<img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/red.png" alt="" srcset="" class="img-fluid">
</a>
<a href="destino-get.php?corbg=lightblue&nome=<?= $nome; ?>&email=<?= $email; ?>" class="col-3 me-5">
<img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/blue.png" alt="" srcset="" class="img-fluid">
</a>
<a href="destino-get.php?corbg=lightgreen&nome=<?= $nome; ?>&email=<?= $email; ?>" class="col-3 me-5">
<img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/green.png" alt="" srcset="" class="img-fluid">
</a>
    </div>
    <style>
        body{
            background-color: <?php echo $corbg; ?>
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>