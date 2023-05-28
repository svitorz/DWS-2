<?php
include("../header.php");
?>
<h1 class="p-3 border-bottom">Exercício 1: Ordenar númerosX:</h1>
<div class="container-fluid py-5">
<form action="destino.php" method="POST">
    <div class="flex-row d-flex">
        <div class="input-group">
            <label for="num1" class="input-group-text">Número 1:</label>
            <input type="number" name="num1" id="num1">
        </div>
        <div class="input-group">
            <label for="num2" class="input-group-text">Número 2:</label>
            <input type="number" name="num2" id="num2">
        </div>
        <div class="input-group">
            <label for="num3" class="input-group-text">Número 3:</label>
            <input type="number" name="num3" id="num3">
        </div>
    </div>
    <div class="p-4">
    <button type="submit" class="btn btn-success">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</form>
</div>

<?php 
include("../footer.php");
?>