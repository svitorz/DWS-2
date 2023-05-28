<?php 
include ("../header.php");
?>
    <?php
    $valor_inicial = filter_input(INPUT_POST, 'valor_inicial', FILTER_SANITIZE_SPECIAL_CHARS);
    $valor_final = filter_input(INPUT_POST, 'valor_final', FILTER_SANITIZE_SPECIAL_CHARS);
    $valor_incremento = filter_input(INPUT_POST, 'valor_incremento', FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h1 class="border-bottom p-3">Exercício 2 - Contador aprimorado:</h1>
    <div class="row bg-primary m-0 p-0 text-center">
    <h2 class="text-light">Parametros informados:</h2>
        <p class="text-light col-4"> Valor inicial: <?= $valor_inicial;?> </p>
        <p class="text-light col-4"> Valor final: <?= $valor_final;?> </p>
        <p class="text-light col-4"> Valor incremento: <?= $valor_incremento;?> </p>
    </div>
    <div class="container-fluid d-flex">
   <?php

    if($valor_inicial < $valor_final){
        for($i=$valor_inicial; $i<=$valor_final;$i+= $valor_incremento) {
         echo "
         <p class='fs-5 p-1'>
         $i
         </p>";
        }
    } else {
         for($i = $valor_inicial; $i >= $valor_final; $i-= $valor_incremento) {
            echo "
            <p class='fs-5 p-1'>
            $i
            </p>";
        }
    }
   ?>
   </div>
<?php 
include("../footer.php");
?>