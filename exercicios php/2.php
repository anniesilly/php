<?php
$pi = 3.14159; //valor fixo de pi
$raio = readline("digite um valor: "); //input pro usuario

$area = $pi * ($raio * $raio);  // calculo da area - pow($raio, 2) tbm pode ser usado 

echo "A=" . number_format($area, 4, ".", "") . "\n"; // formatação do valor para casas decimais


