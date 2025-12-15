<?php
//1012 //devia ter uma forma de otimizar isso
$valores = explode(" ", readline()); //explode para valores um do lado do outro
$a = (float)$valores[0];
$b = (float)$valores[1];
$c = (float)$valores[2];


$base = $a;
$h = $c;


$tri = ($a * $c) / 2; //area do triangulo


$cir = 3.14159 * pow($c, 2); //area do circulo
$tra = ($base + $b) * $h /2; //area do trapezio ta errada
$q = pow($b, 2); //area do quadrado
$r = $a * $b; //area do retangulo


echo 'TRIANGULO: ' . number_format($tri, 3, '.','') . "\n";
echo 'CIRCULO: ' . number_format($cir, 3, '.','') . "\n";
echo 'TRAPEZIO: ' . number_format($tra, 3, '.','') . "\n";
echo 'QUADRADO: ' . number_format($q, 3, '.','') . "\n";
echo 'RETANGULO: ' . number_format($r, 3, '.','') . "\n";
