<h1 class="p-3 border-bottom">Exercício 1: Ordenar números:</h1>
<?php
include ("../header.php");
?>
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
<?php
include("../footer.php");
?>