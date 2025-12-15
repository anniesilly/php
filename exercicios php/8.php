<?php
$f = (int)readline("digite seu nº: ");
$hr = (int)readline("digite hora trabalhada: ");
$valor = (float)readline("salario: ");

$salario = ($hr * $valor);

echo "NUMBER = $f" . "\n";
echo "SALARY = ". number_format($salario, 2, ".","") . "\n";

