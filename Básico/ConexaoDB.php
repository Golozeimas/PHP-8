<?php
$host = "localhost";
$db = "site";
$user = "root";
$password = "";

$mysqli = new mysqli($host, $user,$password,$db);
if($mysqli -> connect_errno){
    echo "O seguinte erro foi computado: ( ".$mysqli -> connect_errno.") ". $mysqli-> connect_error;
}

?>