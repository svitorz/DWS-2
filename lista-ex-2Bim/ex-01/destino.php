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
<h1 class="p-3 border-bottom">Exercício 1: Ordenar números:</h1>
<div class="container">

<?php 
$valores = array();


$num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_SPECIAL_CHARS);
$num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_SPECIAL_CHARS);
$num3 = filter_input(INPUT_POST, 'num3', FILTER_SANITIZE_SPECIAL_CHARS);

array_push($valores, $num1);
array_push($valores, $num2);
array_push($valores, $num3);

rsort($valores);

// VAR_DUMP($_POST);

// echo ("$valores[0],$valores[1] e $valores[2]");  
 
if(($valores[0] == $valores[1]) && ($valores[1] == $valores[2]) && ($valores[0]==$valores[2])){
    echo"<p class='fs-5 text-justify border-bottom p-3'>Os três numeros são iguais.</p>";
}else{
    echo"<p class='fs-5 text-justify border-bottom p-3'>$valores[0],$valores[1] e $valores[2]</p>";
}
?>
</div>
<footer>
<a href="../ex-01/index.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover d-block">Exercício 1:</a>
<a href="" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover d-block">Exercício 2:</a>
<a href="" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover d-block">Exercício 3:</a>
<a href="" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover d-block">Exercício 4:</a>
</footer>
<script src="../../bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>