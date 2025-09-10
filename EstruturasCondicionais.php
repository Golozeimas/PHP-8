<?php
    if(-10){ // if é uma estrutura condicional, -10 é verdadeiro, pois tudo que é diferente de false ou 0 é true em PHP
        echo "olá, como estamos?";
    }
    
    echo "\n";
    
    $notaDoAluno1 = 6;
    $notaDoAluno2 = 7;
    $media = 7;
    if ($notaDoAluno1 < $media){ // boa prática colocar a situação negativa, primeiro
        echo " Você não passou no teste, tente novamente!";
    }else{
        echo " Você passou, Parabéns!";
    }
    
    $senha = "admin";
    $keyword = "root";
    if ($senha  == "admin"){
        echo " Acertou a senha, conectado com sucesso";
    }else{
        echo " Você não acertou a senha, tente novamente!";
    }

    $num1 = 10;
    if($num1 > 0){
        echo "Número positivo";
    }elseif($num1 < 0){
        echo "Número negativo";
    }elseif($num1 === 0){
        echo "Número igual a zero";
    }


?>