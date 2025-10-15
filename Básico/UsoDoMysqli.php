<?php
$host = "localhost";
$db = "php_ims";
$user = "root";
$password = "";

$mysqli = new mysqli($host, $user,$password,$db);
if($mysqli -> connect_errno){
    echo "O seguinte erro foi computado: ( ".$mysqli -> connect_errno.") ". $mysqli-> connect_error;
}

$query_exec = $mysqli -> query("SELECT * FROM units LIMIT 3") or die($mysqli -> error);

while ($Pesos = $query_exec -> fetch_assoc()){
    echo $Pesos['unit']."<br>";
}


?>