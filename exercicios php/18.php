<?php //1018

$valor = (int)readline();

$nota100 = (int)($valor/100);
$resto = $valor % 100;

$nota50 = (int)($resto /50);
$resto = $resto % 50;

$nota20 = (int)($resto /20);
$resto = $resto % 20;

$nota10 = (int)($resto /10);
$resto = $resto % 10;

$nota5 = (int)($resto /5);
$resto = $resto % 5;

$nota2 = (int)($resto /2);
$resto = $resto % 2;

$nota1 = $resto;

echo $valor . "\n";
echo $nota100 . " nota(s) de R$ 100,00" . "\n";
echo $nota50 . " nota(s) de R$ 50,00" . "\n";
echo $nota20 . " nota(s) de R$ 20,00" . "\n";
echo $nota10 . " nota(s) de R$ 10,00" . "\n";
echo $nota5 . " nota(s) de R$ 5,00" . "\n";
echo $nota2 . " nota(s) de R$ 2,00" . "\n";
echo $nota1 . " nota(s) de R$ 1,00" . "\n";

?>



<?php // 1020
$idade = (int)readline();


