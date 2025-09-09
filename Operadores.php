<?php

$numero = 150; // atribuição de uma varivel 
$numero2 = 150;
$numero3 = 50;

$resultado = ($numero + $numero2) - $numero3; // operação de soma, junto com operação de subtração

$resultado2 = $numero3 * 2; // operação de multiplicação

$resultado3 = $numero3 / 15; // operação de divisão

echo $resultado; // printa o resultado

var_dump($resultado);

echo $resultado3; // é um float

$teste = $numero == $numero2; // não compara tipos

echo $teste;

$teste2 =  $numero3 === "50";

echo $teste2; // não aparece nada, pois "===" compara tipos também, é falso

$teste3 = $numero != "150"; // retorna false aqui por não ser diferente, compara a apenas o valor

$teste4 = $numero !== "150"; // retorna verdedeiro, pois o tipo conta nesse operador "!=="

$teste5 = ($numero3 * 4) + 20; // podemos separar por parênteses também como normalmente já é feito

$teste6 = 2 * ($numero3+10+($numero2+5)); // segue a lógica aritmética, como já vimos em outras linguagens

$teste7 = $numero3 < $numero; // 50 é menor que 150, retorna verdadeiro

$teste8 = $numero3 <= 50; // 50 é menor ou igual a 50, retorna verdadeiro

$teste9 = $numero3 > $numero2; // 50 é maior que 150, retorna false

$teste10 = $numero3 >= 20; // 50 é maior ou igual a 20, retorna verdadeiro 

$teste11 = $numero && $numero3; // vai retorna verdadeiro, pois no PHP tudo que é diferente de 0, e de false, é verdadeiro

$teste12 = $numero3 && 0; // retorna false, pois 'zero' é false

$teste13 = $numero3 && !false; // retorna verdadeiro, pois estou negando o false, ou seja, fica 'true'

echo $teste6;

echo $teste13;
?>