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
    <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);  
            if($num % 2 == 0){
                $tipo = "par";
                $res = $num*2;
                $conta = "dobro";
            } else {
                $tipo = "ímpar";
                $res = $num * 3;
                $conta = "triplo";
            }
    ?>
    <h1 class="p-4 border-bottom">Exercício 3 - Par e Ímpar:</h1>
    <div class="container-fluid">
            <p class="fs-3">O número <?= $num;?> é <?= $tipo; ?></p>
            <p class="fs-3">E o <?= $conta; ?> dele é <?= $res; ?>!</p>
    </div>
    <script src="../../bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</body>
</html>