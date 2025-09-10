<?php
$meu_peso = 15;
 
if($meu_peso < 18.5){
    echo "Você estar na condição de magreza";
}elseif($meu_peso >= 18.5 && $meu_peso <= 24.9 ){
    echo "Você estar na condição de normal";
}elseif($meu_peso >= 25 && $meu_peso <= 29.9){
    echo "Você estar na condição de sobrepeso";
}elseif($meu_peso >= 30 && $meu_peso <= 39.9){
    echo "Você estar na condição de obesidade";
}elseif($meu_peso > 40){
    echo "Você estar na condição de obesidade grave";
}else{
    echo "Você digitou um número inválido, digite novamente";
}
?>