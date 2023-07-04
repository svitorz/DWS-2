<?php 
require_once "../pages/header.php";

$num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_INT);
$num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_INT);
$operacao = filter_input(INPUT_POST, "operacao", FILTER_SANITIZE_NUMBER_INT);
?>
    <style>
        .positivo {
            color: blue;
        }
        .negativo {
            color: red;
        }
    </style>
<h1 class="text-center py-5 border-bottom">Praticando 1 - Calculadora:</h1>

<div class="container-fluid">
    <p class="display-4">
        <?php 
        if($operacao==1){
            $resultado = $num1 + $num2;
            echo "o resultado da expressão <code>$num1 + $num2</code> é  <strong>$resultado</strong><br>";
        }elseif($operacao==2){
            $resultado = $num1 - $num2;
            echo "o resultado da expressão <code>$num1 - $num2</code> é <strong>$resultado</strong><br>";
        }elseif($operacao==3){
            $resultado = $num1 * $num2;
            echo "o resultado da expressão <code>$num1 x $num2</code> é <strong>$resultado</strong><br>";
        }
        elseif($operacao==4){
            $resultado = $num1 / $num2;
            echo "o resultado da expressão <code>$num1 / $num2</code> é <strong>$resultado</strong><br>";
        }
        if($resultado >= 0){
            echo "<p class='display-5'> <b>$resultado </b> é <strong class='positivo'>Positivo</strong>.</p>";
        }else {
            echo "<p class='display-5'> <b>$resultado </b> é <strong class='negativo'>Negativo</strong>.</p>";
        }
        ?>
    </p>
</div>
<?php
require_once "../pages/menu.php";
require_once "../pages/footer.php";
?>