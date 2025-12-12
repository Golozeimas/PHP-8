<?php

if(!isset($_SESSION)){
    session_start();

    session_destroy();
    
    echo $_SESSION["id_usuario"];
}

?>