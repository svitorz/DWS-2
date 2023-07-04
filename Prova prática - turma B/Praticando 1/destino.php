<?php
include "../pages/header.php";

$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
$valor = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<style>
.colorido {
    color: #FC0FC0;
}
.par {
    color: blue;
}
.impar {
    color: orange;
}
</style>

<div class="container-fluid">
    <h1 class="text-center border-bottom py-5">Praticando 1 - Calculadora:</h1>

    <?php 
if($valor==1){
    $resultado = $numero ** 2;
    echo "<p class='display-1'>O resultado da expressão <span class='colorido'> " . $numero . "<sup>2</sup> </span> é " . "<b>" . $resultado . "</b> </p>";
} elseif($valor==2){
    $resultado = $numero ** 3;
    echo "<p class='display-1'>O resultado da expressão <span class='colorido'> " . $numero . "<sup>3</sup> </span> é " . "<b>" . $resultado  . "</b> </p>";
} elseif($valor==3){
    $resultado  = $numero ** 5;
    echo "<p class='display-1'>O resultado da expressão <span class='colorido'> " . $numero . "<sup>5</sup> </span> é " . "<b>" . $resultado . "</b> </p>";
} elseif($valor==4){
    $resultado = $numero ** 8;
    echo "<p class='display-1'>O resultado da expressão <span class='colorido'> " . $numero . "<sup>8</sup> </span> é <b>" . $resultado . "</b> </p>";
}
    if($resultado%2==0){
        echo "<p class='display-5'> $resultado é <span class='par'> par </span> </p>";
    }else {
        echo "<p class='display-5'> $resultado é <span class='impar'> impar </span> </p>";
    }

    ?>

</div>

<?php
include "../pages/menu.php";

include "../pages/footer.php";
?>
