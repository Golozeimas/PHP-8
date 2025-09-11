<?php

$lista1 = array(1,2,3,4,10,1); // primeira forma de se fazer um array, podemos ter números

$lista2 = ["a", "b", "c", "d"]; // segunda forma de se fazer um array, ou letras e palavras

$lista3 =["a", "Goku", "Naruto", 13, 22.2, 1.5];// podemos misturar diversdos tipos de dados em um array

$lista3 = array(
    0 => "Naruto",
    1 => "Goku",
    3 => "Luffy"
);

$categorias = [
    1 => "Ação",
    2 => "Drama",
    3 => "Terror",
    4 => "Horror"
];

foreach($lista1 as $i => $numbers){
    echo $i . $numbers;
}

$lista1[] = 10; // cria novos indices que apontam para ele, no caso aqui seria o indice 6
$lista1[] = 12; // e aqui o 7

$lista1[6] = array(100,2,3,4,5,6);

echo "<h1>".$lista1[6][0] ."</h1";

var_dump($lista3);

var_dump($lista1);

for($i = 10; $i <= 20; $i++){ // bobeira, iniciou o for não adiciona ainda, só adiciona na segunda
    $lista[] = $i; // cria indices e adiciona os números, para esse arrays, por exemplo o 11 estar no indice[1]
}


var_dump(($lista));


$nova = array_pop(($lista)); // remove e retorna o ultimo elemento da lista

$nova1 = array_push($lista,5); // adiciona os elemento no caso aqui seria o 5 no final do array e retorna seu tamanho atual [indice, no caso 11] 

echo "<br>". $nova;
echo "<br>". $nova1;

echo "<br>";

var_dump($lista);
?>