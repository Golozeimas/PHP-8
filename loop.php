<?php

$num1 = 4;

$num2 = 3;

$resultado = 0;
for($i = 0; $i < 4; $i++){ // o for conta com a seguinte estrutura ([declaração de varivel geralmente contadora]; [condição que tem que ser verdadeira; e adicionar++ ou remover--])
   $resultado = $num2+$num1;
}

echo "Resultado da multiplicação:" . $resultado;

for($j = 0; $j < 10; $j++){
    echo $j . "<br>";

}
/*
do{
    $k = 0;

    $k++; // é como se fosse k = k + 1

}while(false);

echo $k;

// achar números pares
$z = 0;
do{
    $z += 2;
    echo "<p>". $z . "</p>";
}while($z < 1000);

$m = 0;
while( $m != 100){
    $m += 2;
}

 
 */

$nomes = 
[ 4 =>"João",
 3 =>"Pablo",
 2 =>"Augusto",
 1 =>"Loide"]; // lista com "João" começando como indíce "0"

for($i = 0;  $i < 4; $i++){
    echo "Nome: " . $nomes[$i] . "<br>"; // Para acessar elementos dos arrays usamos um 'for', que acesse o 'ponteiro/contador' ($i)
}

echo "Nome do rei: " . $nomes[0] . "<br>"; // vai imprimir o nome "João"

echo "Nome do companheiro: " . $nomes[1] . "<br>";

echo "Nome de jogador ruim: " . $nomes[2] . "<br>";

echo "Continuação do mesmo: " . $nomes[3] . "<br>";

foreach($nomes as $i => $nome){
    echo "<p>" . "Esse é seu indice: ". $i ." nome:". $nome . "</p>";
}


?>"
