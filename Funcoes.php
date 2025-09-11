<?php
$num1 = 50;
function gerarElementosArray($num1){
    $lista = [];
    for($i = 0; $i < $num1; $i++){
        $lista[] = $i;
    }
    var_dump($lista);
}

gerarElementosArray($num1);

function gerarNumeros ($inicio = 0, $fim = 20){ //podemos definir números nos parâmetros como padrão
    $lista = [];
    if ($fim < $inicio){
        echo "Não podemos continuar";
    }else{
    for($inicio; $inicio < $fim; $inicio++){
        $lista[] = $inicio;
        }
    }
    return $lista; // retorna uma lista
}

$var = gerarNumeros(0); // recebendo um array na variavel
gerarNumeros(0, 100); // e nesse caso o que vai valer, é o meu "chamado da função"

var_dump($var);

foreach($var as $var1){
    echo "<br>" . $var1; // imprimindo um array de números com $var, junto com foreach que nós ajuda a imprimir por acessar a memória
}

$numero_aleatorio = rand(1,1000); // o PHP e qualquer outra linguagem, contém funções já definidas

echo "<br>" . $numero_aleatorio;

$preco = 10000;
echo "<br>"."R$:". number_format($preco, 2, ",","."); // variavel do número, decimais que deseja exibir, formato para os decimais, formato pra os milênios

function formatar_preco($preco){
    
    $preco = "<br>". "R$:" . number_format($preco, 2, ",",".");
    return $preco;
}

echo formatar_preco(50);
?>