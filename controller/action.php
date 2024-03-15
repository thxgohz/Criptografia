<?php
//ini_set('display_errors', 0);


function cripto($txt, $cripto){
    $key = $_POST['chavePub'];
    $iv = "sjkdfgsb3bhv3hv3hsd";
    $chavePrivada = $_POST['chavePriv'];
    $SessionKeyPriv = $_SESSION['chaveprivada'];
    
    if ($key && $iv){
      $key = hash("sha256", $key);
      $iv = substr(hash("sha256", $iv), 0, 16);
      if ($cripto == 'true' && $chavePrivada == $SessionKeyPriv) {
        //$texto_encr = openssl_encrypt($txt, "AES-256-CBC", $key, 0, $iv);
        $texto_encr = base64_encode($texto_encr);
      } else if ($cripto == 'false' && $chavePrivada == $SessionKeyPriv){
        $texto_encr = openssl_decrypt(base64_decode($txt), "AES-256-CBC", $key, 0, $iv);
        
        

      }
      return $texto_encr;
    }
    return false;
  }


?>



