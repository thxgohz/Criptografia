<?php 
include('../model/conexao.php');
session_start();
$Vnome = $pPOST['txtnome'];
$Vemail = $_POST['txtemail'];
$VchaveP = $_POST['txtchaveP'];

$consulta = $conn->query("select cd_usuario,nome,email,chaveP from tbl_usuario where email = '$Vemail' and chaveP = '$VchaveP'");

if($consulta->rowCount() == 1){
    $exibeUsuario = $consulta->fetch();

    if($exibeUsuario){

         $_SESSION['id'] = $exibeUsuario['cd_usuario'];
         $_SESSION['nome'] = $exibeUsuario['nome'];
         $_SESSION['chaveprivada'] = $VchaveP;
         header('location: ../index.php');
    }
}
else{
    header('location: ../view/login.php');
    echo ("Usuário não encontrado");
}

?>

