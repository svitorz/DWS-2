<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);  
    ?>

    <h1 class="border-bottom p-3">Praticando 2 - Gerador de quadrados:</h1>
    <div class="container-fluid p-5">
        <div class="row">
            <p class="col-2 display-5"><a href="index.php?num=1" class="link-underline-primary">1</a></p> 
            <p class="col-2 display-5"><a href="index.php?num=2" class="link-underline-primary">2</a></p> 
            <p class="col-2 display-5"><a href="index.php?num=5" class="link-underline-primary">5</a></p> 
            <p class="col-2 display-5"><a href="index.php?num=11" class="link-underline-primary">11</a></p> 
            <p class="col-2 display-5"><a href="index.php?num=23" class="link-underline-primary">23</a></p> 
            <p class="col-2 display-5"><a href="index.php?num=32" class="link-underline-primary">32</a></p> 
        </div>
    </div>
    <div class="container-fluid">
        
    </div>
    <div class="row border-top p-4">
        
    <?php
        for($i = 1; $i <= $num; $i++){
            echo("<div class='square bg-success text-light text-center align-center m-1'>$i</div>");
        }
    ?>
    </div>

<a href="index.php?num=0"> Limpar </a>


<style>
.square {
  height: 100px;
  width: 100px;
}
</style>

<script src="../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>