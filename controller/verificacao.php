<?php

function verificacao($path){
    if(!$_SESSION['id']){
        header('Location: ' . $path);
        exit;
    }
    
}

?>