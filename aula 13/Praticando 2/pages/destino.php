<?php include_once 'header.php'; ?>

<?php 
$text = filter_input(INPUT_POST, "texto", FILTER_SANITIZE_SPECIAL_CHARS);  
$qtd = filter_input(INPUT_POST, "qtd", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($text)){
        echo '<div class="alert alert-warning" role="alert">
        <b>Atenção!</b> Não foi informado um texto, volte ao <a href="form.php">formulário</a> e informe um texto.
        </div>';
    } else if(empty($qtd)) {
        echo '<div class="alert alert-warning" role="alert">
        <b>Atenção!</b> Não foi informado um nímero, volte ao <a href="form.php">formulário</a> e informe um número.
        </div>';
    } else {
        for($i = 0; $i < $qtd; $i++){
            echo "<div class='alert alert-info' role='alert'>
            $text
            </div>";
        }
    }
?>

<?php 
include_once 'footer.php';
?>