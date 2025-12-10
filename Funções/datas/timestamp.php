<?php

// com essa função temos o timestamp de hoje
echo time();

$data = "10-10-2015";

// com essa função transforma uma data americana em timestamp
echo "<br>".strtotime($data);
?>
<br>
<?php

// padrão americano (ano-mês-dia)
$aniversario = "2005-10-21";

// transforma em qualquer data que deseja de acordo com o timestamp
echo date("D/d/Y", time());

?>
<br>
<h1>Aniversário do GOAT</h1>
<?php

// aniversario do pai com strtotime para o timestamp e date para formatação
echo "<h2>".date("d/m/Y",strtotime($aniversario))."</h2>";
?>