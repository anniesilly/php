<?php //1014
$x = readline("distancia percorrida "); //distancia percorrida
$y = (float)readline('combustivel gasto ');  //combustivel gasto


$consumo = $x / $y;
echo number_format($consumo, 3, '.', ''), ' km/l'. "\n";
