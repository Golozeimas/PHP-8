<?php
$inteiro = 50;
$decimal = 15.5;
$frase = "Codar é bom demais";
$listaDeInteiros = [1,2,3,4,5,6,7,8,9,10];
$listaOutraForma = array("matheus", 22); // outra forma de declarar arrays no PHP, e mistura de números com strings
$listaDePalavras = ["Goku", "Naruto", "Luffy"];
$condicao = true;
$condicaoNegativa = false;

echo $frase;
echo "\n";
echo $inteiro;

echo $listaDePalavras; // echo não funciona para a printagem do tipo array e nem de false

echo $condicaoNegativa;

echo $condicao;

echo "\n";

var_dump($condicao);

echo "\n";

var_dump($listaDePalavras);

echo "\n";

var_dump($inteiro);

echo "\n";

var_dump($frase);

echo "\n";

define("pi", 3.14);

echo pi;

echo "\n";

var_dump(pi);

?>