<?php
$linha1 = explode(" ", readline());
$cod1 = (int)$linha1[0];
$qtd1 = (int)$linha1[1];
$valor1 = (float)$linha1[2];

$linha2 = explode(" ", readline());
$cod2 = (int)$linha2[0];
$qtd2 = (int)$linha2[1];
$valor2 = (float)$linha2[2];

$total = ($qtd1 * $valor1) + ($qtd2 * $valor2);

echo "VALOR A PAGAR: R$ " . number_format($total, 2,".","") . "\n";

