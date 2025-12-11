<?php

if(count($_POST) > 1){

    // o atual + 10 dias por exemplo
    $timestamp_dos_cookies = time() + (10 * 24 * 60 * 60 );

    // nome do cookie, variavel que vai armazena e tempo que será armazenado
    setcookie("nome_do_usuario", $_POST["nome"], $timestamp_dos_cookies);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário dos cookies</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["nome_do_usuario"])){
        echo "Bem vindo, ". $_COOKIE["nome_do_usuario"];
    }else{
    ?>
    <form method="POST" action="#" name="form">
        <p>Qual é o seu nome?</p>
        <input type="text" name="nome">
        <p>Qual é o seu email?</p>
        <input type="email" name="email">
        <button type="submit" name="envia_dados">Enviar dados</button>
    </form>
    <?php } ?>
</body>
</html>