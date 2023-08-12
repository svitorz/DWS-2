<?php
include "../pages/header.php";
?>
    <form action="destino.php" method="POST">
    <h1 class="text-center border-bottom py-5">Praticando 1 - Calculadora: </h1>
    <div class="container-fluid">
        <div class="form-control">
            <label for="numero" class="form-control">Insira um número:</label>
            <input type="number" name="numero" id="numero" class="input-group">
        </div>
        <div class="form-control">
            <select class="form-select" aria-label="Default select example" name="value" id="value">
                <option name="value" id="value" selected>Selecione uma operação:</option>
                <option name="value" id="value" value="1" >Ao quadrado (X²)</option>
                <option name="value" id="value" value="2" >Ao cubo(X³) </option>
                <option name="value" id="value" value="3" >À quinta potência (X^5)</option>
                <option name="value" id="value" value="4" >À oitava potência (X^8)</option>
            </select>
        </div>
        <div class="input-group py-5">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
        </div>
    </div>
    </form>
<?php 
include "../pages/menu.php";

include "../pages/footer.php";
?>