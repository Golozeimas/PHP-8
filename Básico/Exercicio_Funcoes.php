<?php

    function potencia_de_numero ($numero,$potencia){
        
        if($numero === 0 && $potencia === 0 ){
            echo "formula indeterminada, impossivel de se resolver";
        }
        if($potencia === 0 ){
            return 1;
        }
        if($potencia === 1){
            return $numero;
        }
        else{
            $resultado = $numero; // numero vira constante
            for($i = 1; $i < $potencia; $i++){ // caso seja 1 a potencia nem roda
                $numero = $numero * $resultado; // $numero sofre mudança mas resultado continua constante, gerando uma potencia
            }
            return $numero;
        }
    }

   echo potencia_de_numero(2, 4);
?>