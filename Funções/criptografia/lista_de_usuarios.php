<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION["usuario"])){
    die("Você não está logado para ver a lista de usuários, 
    <a href='index.php'>Clique aqui para se cadastrar</a>");
}

require("conexao.php");

$sql = "SELECT * FROM senhas";

$query = $mysqli -> query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>

    <h1>Lista de usuários</h1>
    <table>
        <thead>
        <tr>
            <th>
                id
            </th>
            <th>
                email
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            while($usuario = $query -> fetch_assoc()){
            ?>
            <td><?php echo $usuario["id"];?></td>
            <td><?php echo $usuario["email"];?></td>
            <?php }?>
        </tr>
        </tbody>
    </table>
</body>
</html>