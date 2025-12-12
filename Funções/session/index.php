<?php

if(!isset($_SESSION)){
    session_start();
    $_SESSION["id_usuario"] = 1;
    echo $_SESSION["id_usuario"];
}

?>