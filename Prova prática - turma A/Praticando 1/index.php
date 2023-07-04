<?php 
require_once("../pages/header.php");
?>

<h1 class="text-center py-5 border-bottom">Praticando 1 - Calculadora:</h1>

<form action="destino.php" method="post">
    <div class="form-control">
        <label for="num1" class="form-control">Número 1:</label>
        <input type="number" name="num1" id="num1" class="form-control">
    </div>
    <div class="form-control">
        <label for="num2" class="form-control">Número 2:</label>
        <input type="number" name="num2" id="num2" class="form-control">
    </div>
    <div class="form-control">
        <label for="operacao" class="form-control">Operação:</label>
        <select name="operacao" id="operacao" class="form-control">
            <option value="1">Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicação</option>
            <option value="4">Divisão</option>
        </select>
    </div>
    <div class="input-group px-3">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning text-light">Limpar</button>
    </div>
</form>

<?php 
require_once "../pages/menu.php";
require_once "../pages/footer.php";
?>