<?php
include("../header.php");
?>
<h1 class="p-4 border-bottom">Exercício 3 - Par e Ímpar:</h1>
<div class="container-fluid m-2">
    <form action="index.php" method="get">
        <div class="input-group p-1 m-3">
            <label for="num" class="input-group-text">Insira um número:</label>
            <input type="number" name="num" id="num" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
</div>
<?php
$num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
if ($num % 2 == 0) {
    echo "<p class='p-4 border-top'>O número <span class='dobro'>$num</span> é par!</p>";
    echo "<p class='p-4 border-top'>E o <span class='dobro'>dobro</span> de <span class='dobro'>$num</span> é <span class='dobro'>" . ($num * 2) . "</span></p>";
} else if ($num % 2 != 0) {
    echo "<p class='p-4 border-top'>O número <span class='triplo'>$num</span> é impar!</p>";
    echo "<p class='p-4 border-top'>E o <span class='triplo'>triplo</span> de <span class='triplo'>$num</span> é <span class='triplo'>" . ($num * 3) . "</span></p>";
}
?>
<?php
include("../footer.php");
?>