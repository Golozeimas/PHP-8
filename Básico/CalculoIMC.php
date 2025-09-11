<div>
    <h1> 
    Afirmação do IMC: 
    </h1>
        <p>
            <b>
                <?php
                $meu_peso = 90;
                $altura = 1.80;
                $imc = $meu_peso /($altura*$altura);
                if($imc < 18.5){
                    echo "Você estar na condição de magreza";
                }elseif($imc >= 18.5 && $imc <= 24.9 ){
                    echo "Você estar na condição de normal";
                }elseif($imc >= 25 && $imc <= 29.9){
                    echo "Você estar na condição de sobrepeso";
                }elseif($imc >= 30 && $imc <= 39.9){
                    echo "Você estar na condição de obesidade";
                }elseif($imc > 40){
                    echo "Você estar na condição de obesidade grave";
                }else{
                    echo "Você digitou um número inválido, digite novamente";
                }
                ?>
            </b>
        </p>
</div>