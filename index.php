<?php
session_start();

include_once 'model/conexao.php';
include_once 'controller/verificacao.php';
$nome = $_SESSION['nome'];
verificacao('view/login.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="view/css/index.css">
</head>
<body>
    <div class="box">
        <h1>Seja bem-vindo(a) <?php echo $nome;?></h1>
        <a href="view/encrypt.php">Criptografar</a>
        <a href="view/decrypt.php">Descriptografar</a>
    </div>
</body>
</html>