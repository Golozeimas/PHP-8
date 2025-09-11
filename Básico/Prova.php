<?php

$questao = "Que ano foi a revolução francesa?";

$respostas = 
["a )"=>"1789", 
"b )"=>"1802", 
"c )"=>"1900", 
"d )"=>"1790"];

echo $questao;

foreach($respostas as $i => $resposta){
    echo "<br>" .$i. $resposta;
}

$questao ="<br>" . "Que ano foi a segunda guerra mundial?";

$respostas = 
["a )"=>"1910", 
"b )"=>"1900", 
"c )"=>"1890", 
"d )"=>"1945"];

echo $questao;

foreach($respostas as $i => $resposta){
    echo "<br>" .$i. $resposta;
}

?>