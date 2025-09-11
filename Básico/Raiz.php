$n1 = 10;
$n2 = 10;

if ($n1 === $n2){
    $raizQuadrada = $n1 * $n2;
    echo sprintf("Raiz Quadrada de 10: %d",$raizQuadrada); // sprintf é a função printf do PHP
}else{
    echo "Não é uma raiz quadrada:" . $n1;
}