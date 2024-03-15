<?php 

include('../model/conexao.php');

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$chaveP = $_POST['txtchaveP'];


$consulta = $conn->query("select email from tbl_usuario where email ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header('location: ../view/cadastro.php');
}
else{
    $incluir = $conn->query("insert into tbl_usuario(nome,email,ChaveP) values ('$nome','$email','$chaveP')");
    echo ("<script>window.alert('Usuario cadastrado com sucesso!')
            window.location.href='../view/login.php?fnc=$fnc&ans=$linha';    
            </script>");
}


?>