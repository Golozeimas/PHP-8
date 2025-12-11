<?php
$host = "127.0.0.1";
$user = "matheus";
$password = "123456";
$db = "senhas";

$mysqli = new mysqli($host, $user, $password, $db);

if($mysqli -> error){
    echo("Conexão falhou: "). $mysqli -> error;
    exit();
}


?>