<?php

session_start();

$titulo_pagina = "Página protegida";
require_once 'header.php';
//include 'conexao.php';

if(!isset($_SESSION["email"])){
?>
<div class="alert alert-danger">
    <h4>Esta é uma página protegida</h4>
    <p>Você está tentando acessar conteúdo restrito.</p>
</div>    
<?php
}else {
?>

<div class="text-center">
    <div class="display-4 fw-bold">
        Aula de sessões
    </div>
    <div class="display-4">
        Está é uma página <span class="bg-danger text-warning"> PROTEGIDA</span>
    </div>
    <div class="display-4">
        só deve ser possível acessa-lá,
    </div>
    <div class="display-4">
        <span class="bg-warning text-danger">
            após ter se autênticado.
        </span>
    </div>
</div>

<?php
}
require_once 'footer.php';
?>            