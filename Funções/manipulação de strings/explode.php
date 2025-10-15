<?php

$nome =  "m a t h e u s";

$juntos = explode(" ", $nome);

for($i = 0; $i < $juntos; $i++ ){

    if($juntos[0] === "m"){
        echo "seu nome tem M";
        break;
    }
}
?>