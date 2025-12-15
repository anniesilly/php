<?php

$nome = readline('digite seu nome: ');
$salario = (float)readline('salario fixo: ');
$bonus = (float)readline('total vendas: ');


$result = $salario + ($bonus * 0.15);


echo 'TOTAL = R$ ' . number_format($result, 2, '.','') . "\n";