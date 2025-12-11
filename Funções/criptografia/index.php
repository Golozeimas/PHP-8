<?php
require ("conexao.php");

if(count($_POST) > 0){
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$query_para_inserir = "INSERT INTO senhas (email, senha) VALUES ('$email', '$senha')";

$mysqli -> execute_query($query_para_inserir) or die($mysqli -> errno);

header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastratamento de usuário</title>
</head>
<body>

    <h1>Cadastrar usuário</h1>
    <form action="login.php" method="POST">
        <p>email e senha:</p>
        <input type="text" name="email">
        <input type="password" name="senha">
        <button type="submit"> Enviar </button>
    </form>

</body>
</html>