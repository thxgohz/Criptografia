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
    <title>Descriptografar</title>
    <link rel="stylesheet" href="css/decrypt.css">
</head>
<body>
  <div class="box">
    <h1>Descriptografar mensagem</h1>
    <form action="../controller/descriptografia.php" method="POST">
        <label>Chave privada:</label><input type="text" name="chavePriv" id="chavepriv">
        <label>Chave pública:</label><input type="text" name="chavePub" id="chavePub"><br>
        <label for="msga" name="msga" id="msga">Mensagem:</label>
        <textarea name="msg" id="msg" cols="50" rows="5"></textarea><br>
        <button type="submit" onclick="validaCaixadesc()">Descriptografar</button>
    </form>
</body>

<script>
function validaCaixadesc(){
  let msg = document.getElementById('msg');
  let chavePub = document.getElementById('chavePub');vv
  let chavePriv = document.getElementById('chavePriv');

  if(msg.value == ""){
    alert ("Coloque seu código na caixa!");
  } else if(chavePub.value == ""){
    alert ("Por favor, informe a chave publica!");
  }else if(chavePriv.value == ""){
    alert ("Coloque seu código na chave privada!");
  }
}
</script>
</html>