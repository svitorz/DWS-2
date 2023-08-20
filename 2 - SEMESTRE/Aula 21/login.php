<?php
session_start();
$titulo_pagina = "Página destino da autênticação";
require_once 'header.php';

require 'conexao.php';

$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p>Nome: $nome";

if($email == "vitor@gmail.com" && $senha = "123"){
    // Deu certo
    $_SESSION['email'] = $email;
    $_SESSION['nome'] = "Vitor";
    ?>
<div class="alert alert-success" role="alert">
    <h4>Autenticado com sucesso. </h4>
</div>
<?php
} else {
    //Não deu certo
    unset($_SESSION['email']);
    unset($_SESSION['nome']);
    
?>
<div class="alert alert-danger">
    <h4>Falha ao efetuar autenticação</h4>
    <p>Usuário ou senha incorretos
    </p>
</div>
<?php
}
require_once 'footer.php';
?>            