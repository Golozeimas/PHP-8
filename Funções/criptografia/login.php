<?php
require ("conexao.php");

if(count($_POST) > 0 ){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query_para_ler_as_linhas =  $mysqli -> query("SELECT * FROM senhas WHERE email = '$email' LIMIT 1");
    
    $usuario = $query_para_ler_as_linhas -> fetch_assoc();

    if(password_verify($senha,$usuario["senha"])){
        echo "Bem vindo, ". $email;
    }else{
        echo "Senha está errada!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>

    <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="email">
        <input type="password" name="senha">
        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>