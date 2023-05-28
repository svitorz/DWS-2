<?php 
include("../header.php");
?>
<h1 class="border-bottom p-3">Exercício 2 - Contador aprimorado:</h1>
<form action="destino.php" method="post">
    <div class="d-flex justify-content-center py-4">
        <div class="input-group">
            <label for="valor_inicial" class="input-group-text">Valor inicial:</label>
            <input type="number" name="valor_inicial" id="valor_inicial" class="form-control">
        </div>
        <div class="input-group">
            <label for="valor_final" class="input-group-text">Valor final:</label>
            <input type="number" name="valor_final" id="valor_final" class="form-control">
        </div>
        <div class="input-group">
            <label for="valor_incremento" class="input-group-text">Valor incremento:</label>
            <input type="number" name="valor_incremento" id="valor_incremento" class="form-control">
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</form>
<?php 
include("../footer.php");
?>