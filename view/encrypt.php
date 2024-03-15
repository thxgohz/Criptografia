<?php

include_once '../model/conexao.php';
include_once '../controller/verificacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografar</title>
    <link rel="stylesheet" href="css/encrypt.css">
</head>
<body>
  <div class="box">
    <h1>Criptografar mensagem</h1>
    <form action="../controller/criptografia.php" method="POST">
        <label>Chave privada:</label><input type="text" name="chavePriv" id="chavePriv">
        <label>Chave pública:</label><input type="text" name="chavePub" id="chavePub"><br>
        <label for="msga" name="msga" id="msga">Mensagem:</label>
        <textarea name="msg" id="msg" cols="50" rows="5"></textarea><br>
        <button type="submit" onclick="validaCaixa()">Criptografar</button>
    </form>
</body>

<script>
function validaCaixa(){
  let msg = document.getElementById('msg');
  let chavePub = document.getElementById('chavePub');
  let chavePriv = document.getElementById('chavePriv');

  if(msg.value == ""){
    alert ("Coloque seu texto na caixa!");
    Event.preventDefault(); 
  }else if(chavePub.value == ""){
    alert ("Por favor, informe a chave Publica");
  }else if(chavePriv.value == ""){
    alert ("Por favor, informe a chave Privada");
  }
}
</script>
</html>