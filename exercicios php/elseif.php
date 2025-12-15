<?php //35
$valores = explode(" ", readline());


$a = (int)$valores[0];
$b = (int)$valores[1];
$c = (int)$valores[2];
$d = (int)$valores[3];


if ( ($b>$c && $d>$a) && ($c+$d)>($a+$b) && ($c>0 && $d>0) && ($a %2==0) ) {
    echo 'valores aceitos';
}
else {
    echo 'valores nao aceitos';
}

?>

<?php
//36
$valores = explode(" ", readline());
$a = (float)$valores[0];
$b = (float)$valores[1];
$c = (float)$valores[2];


$delta = pow($b,2) - 4 * $a * $c;


if ($a==0 || $delta<0) {
    echo 'Impossivel calcular' ."\n";
} else {
    $x1 = (- $b + sqrt($delta)) /(2 * $a);
    $x2 = (- $b - sqrt($delta)) /(2 * $a);


    echo 'R1 = '.number_format($x1, 5,'.',''). "\n";
    echo 'R2 = '.number_format($x2, 5,'.',''). "\n";
}
?>


<?php //37
$num = (float)readline();


if ($num >=0 && $num <=25.00) {
    echo 'Intervalo [0,25]'."\n";
}
elseif ($num >=25.00 && $num <=50.00) {
    echo 'Intervalo (25,50]'."\n";
}
elseif ($num >=50.00 && $num <=75.00) {
    echo 'Intervalo (50,75]'."\n";
}
elseif ($num >=75.00 && $num <=100.00) {
    echo 'Intervalo (75,100]'."\n";
}
else {
    echo "Fora de intervalo"."\n";
}
?>




<?php
//38
$linha = explode(" ",readline());
$cod = (int)$linha[0];
$qtd = (int)$linha[1];


if ($cod == 1){
    $total = ($qtd * 4);
    echo "Total: R$ " . number_format($total, 2, '.','') . "\n";
} else if ($cod == 2){
    $total = ($qtd * 4.5);
    echo "Total: R$ " . number_format($total, 2, '.','') . "\n";
} else if ($cod == 3){
    $total = ($qtd * 5);
    echo "Total: R$ " . number_format($total, 2, '.','') . "\n";
} else if ($cod == 4){
    $total = ($qtd * 2);
    echo "Total: R$ " . number_format($total, 2, '.','') . "\n";
} else if ($cod == 5){
    $total = ($qtd * 1.50);
    echo "Total: R$ " . number_format($total, 2, '.','') . "\n";
}
?>







