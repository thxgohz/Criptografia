<?php
session_start();
require_once '../model/conexao.php';
include_once 'action.php';

require_once '../view/encrypt.php';

$txt_encrip = cripto($_POST['msg'], 'true');
$chavePrivada = $_POST['chavePriv'];
//header('location: action.php');

if(empty($txt_encrip)){
    header('Location: ../view/encrypt.php');
}

?>

<html>
    <link rel="stylesheet" href="../view/css/encrypt.css">
        <br><br>
        <textarea disabled name="text" cols="50" rows="5"><?php echo $txt_encrip;?></textarea>
        <br>

        </form>
        <form action="../view/decrypt.php" >
        <button type="submit" >Descriptografar</button><br>
        </form>
        </div>
</html>