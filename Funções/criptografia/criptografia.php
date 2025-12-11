<?php

$senha = "1234";

// não dá pra usar mais
// $criptografada = md5($senha);

$hash = password_hash($senha, PASSWORD_DEFAULT);


echo $hash;

// seleciona a senha do cliente, assim consigo usar a senha, até para login por exemplo
// $sql = "SELECT * FROM clientes WHERE senha = '$criptografada' ";

?>