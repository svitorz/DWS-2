<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    $val = filter_input(INPUT_GET, "val", FILTER_SANITIZE_SPECIAL_CHARS);  
    ?>
    <h1 class="p-2 border-bottom">Exercício 1 - Calculadora</h1>
    
    <div class="container-fluid">
        <?php 
    for($i = 0; $i<=10; $i++) {
        $rel = $i * $val;
        echo("<p class='text-center fs-3'> $val  x  $i = $rel </p> <br>");
    }       
    ?>
    <a class="fs-4" href='index.php'>Voltar</a>
</div>
<script src="../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>