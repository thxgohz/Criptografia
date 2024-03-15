<?php

session_start();
require_once '../model/conexao.php';
include_once 'action.php';

require_once '../view/decrypt.php';

$chavePrivada = $_POST['chavePriv'];
$txt_descrip = cripto($_POST['msg'], 'false');
//var_dump($txt_descrip);
?>

<html>
    <link rel="stylesheet" href="../view/css/decrypt.css">
    <br><br>
    <textarea disabled name="text" cols="50" rows="5"><?php echo $txt_descrip;?></textarea>
    <br>

    </form>
    <form action="../paginas/descriptografiaPage.php" >
    </form>
    </div>
</html>