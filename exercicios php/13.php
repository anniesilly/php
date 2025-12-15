<?php
$valores = explode(" ", readline());
$a = (int)$valores[0];
$b = (int)$valores[1];
$c = (int)$valores[2];

$maiorAB = ($a + $b + abs($a-$b)) /2;

$maior = ($maiorAB + $c + abs($maiorAB-$c)) /2;

echo "$maior eh o maior" . "\n";
