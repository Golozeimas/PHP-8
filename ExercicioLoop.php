<?php

    $notas_dos_alunos = ['7.4', '1.7', '8.5', '3.5', '4.4', '8.7', '6.4', '8.4', '1.2', '4.3', '9.8', '0.5', '8.2',
'4.7', '1.1', '3.3', '3.4', '4.8', '8.7', '5.4', '2.2', '3.7', '5.9', '7.4', '4.8', '4.7', '1.5', '8.4', '2.1', '2.7'];

for($i = 0; $i < $notas_dos_alunos; $i++){

    if($notas_dos_alunos[$i] >= 6 ){
        echo "Você foi aprovado <br>";
        $aprovados = $notas_dos_alunos[$i];
    }
    elseif($notas_dos_alunos[$i] < 6){
        echo "Você foi reprovado <br>";
        $reprovados = $notas_dos_alunos[$i];
    }
}

echo "Alunos que foram aprovados:". $aprovados;

echo "Alunos que foram reprovados: ". $reprovados;

?>