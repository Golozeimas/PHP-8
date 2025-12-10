<?php

?>
<p>Data atual em timestamp: </p>
<?php
// Mostrar a data atual em timestamp
echo time();

?>
<p>Timestamp transformada: </p>
<?php
// Transforma timestamp em data atual, com dia/mês/ano e hora:minutos: e segundos
echo date("d/m/Y H:m:s",time());

?>
<p>Data atual em timestamp: </p>
<?php
// Transforma data atual em timestamp
$data_atual = "2025-12-10";
echo strtotime($data_atual);

?>
<p>Soma de 10 dias em uma data qualquer: </p>
<?php
// Somar 10 dias numa data, no caso escolhi fevereiro para demonstrar que 
// essa é a melhor forma de adicionar dias em uma data
$data_aleatoria ="2020-02-20";
$data_atualizada = strtotime($data_aleatoria) + 864000;
echo date("Y-m-d" , $data_atualizada);

?>
<p>Subtração 10 dias em uma data qualquer: </p>
<?php
// Subtrair 10 dias em uma data qualquer
$data_aleatoria2 = "2025-12-10";
$data_atualizada_2 = strtotime($data_aleatoria2) - 864000;
echo date("d/m/Y",$data_atualizada_2);

?>
<p>Transformação do timestamp para o banco de dados: </p>
<?php
// Transformar o timestamp para o banco de dados
echo date("Y-m-d",time())

?>
<p>Descobrir o dia da semana de uma data: </p>
<?php
// Descobrir o dia da semana de uma data
$data = "2023-10-21";
echo date("D",strtotime($data));
?>