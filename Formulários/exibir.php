<?php

    $nome = $_POST["nome"]; // podemos fazer tratamentos dos dados com metódo POST
    $idade = $_POST["idade"] + 20; // modificações e outras coisas
    
    echo "O nome é: ". $_POST["nome"]."<br>"; // o que colocamos do parentêses é o mesmo name=""; do HTML 
    echo "A idade é: ". $_POST["idade"]. "<br>";
    echo "O e-mail é:". $_POST["email"]. "<br>";

?>