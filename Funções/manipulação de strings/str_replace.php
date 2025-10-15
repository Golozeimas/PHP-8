<?php

$frase =  "você deveria comer frutas, vegetais e fibras todos os dias";

$saudavel = array("frutas", "vegetais", "fibras");

$saboroso = array("pizza", "cerveja", "sorvete");


$nova_frase = str_replace($saudavel, $saboroso, $frase);

echo ($nova_frase);

?>