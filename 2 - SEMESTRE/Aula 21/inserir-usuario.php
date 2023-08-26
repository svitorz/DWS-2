<?php
session_start();
require 'autenticacao.php';


$titulo_pagina = "Página de inserção de produtos inserção de dados";
require_once 'header.php';

require 'conexao.php';

$nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,"senha");

$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

echo "<p>Nome: $nome";
echo "<p>Email: $email";

/**
 *  INSERT INTO `produtos`(`id`, `nome`, `urlfoto`, `descricao`) 
 * VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
 * 
 */

$sql = "INSERT INTO `usuarios`(`nome`, `email`, `senha`) VALUES (?,?,?)";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome,$email,$senha_hash]);

if($result == true){
?>
<div class="alert alert-success" role="alert">
    <h4>Dados gravados com sucesso!</h4>
</div>
<?php
}else {
    $errorArray = $stmt->errorInfo();
?>
<div class="alert alert-danger" role="alert">
    <h4>Erro ao gravar dados</h4>
    <p><?= $errorArray[2]; ?></p>
</div>
<?php 
}
?>
<?php
require_once 'footer.php';
?>            