<?php
session_start();

include_once '../model/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="box">
    <h1>Fazer login</h1>
    <form action="../controller/validausuario.php" method="POST">
      <label>Nome:</label><br>
        <input name="txtnome" type="text" class="field" placeholder="Digite seu nome" required id="txtnome"><br><br>
      <label>Email:</label><br>
        <input name="txtemail" type="email" class="field" class="email" placeholder="Digite seu email" required id="txtemail"><br><br>
      <label>Chave privada:</label>  <br>
        <input name="txtchaveP" type="chaveP" class="chaveP" class="field" placeholder="Digite Sua chave privada" required id="txtsenha"><br><br>
        <input type="submit" value="Logar" onclick="validarLogin()" id="btn">
    </form>

    <p>Não possui uma conta? <br><a href="cadastro.php">Cadastre-se</a></p>
  </div>





</body>
<script>
function validarLogin()
  let nome = document.getElementById('txtnome');
  let email = document.getElementById('txtemail');
  let senha = document.getElementById('txtsenha');

  if (nome.value == "") {
    alert("Preencha seu nome!");
    return false;
  } else if (email.value == "") {
    alert("Informe seu email!");
    return false;
  } else if (senha.value == "") {
    alert("Informe sua chave privada!");
    return false;
  } else {
    return true;
}
</script>
</html>