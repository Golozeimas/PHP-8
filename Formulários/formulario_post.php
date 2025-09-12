<!--
<p> O nome é: <?php echo $_GET['nome']?></p>
<p> A idade é:<?php echo $_GET['idade']?></p>
<?php
/*
var_dump($_GET); // usamos esse var_dump para verifica que $_GET é uma variavel que já vem por padrão no PHP

echo '<br>' . $_GET['nome'];
*/
?>
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title> Formulario - GET</title>
</head>
<body>
<form method="POST" action="exibir.php"> <!-- mostra para onde vai os dados com o action, e o method GET indica que quero receber esses dados pela URL  -->
    <label for="">Nome:</label>
    <br>
    <input type="text" name="nome"> <br><br>    
    <label for="">Idade:</label>
    <br>
    <input type="number" name="idade"><br><br>    
    <label for="">E-mail</label>
    <br>
    <input type="text" name="email"><br><br>
    <button type="submit"> Enviar </button> <!-- usado para submeter respostas para o banco de dados-->
</form>
</body>
</html>