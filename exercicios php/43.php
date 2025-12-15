<?php
$linha=explode(' ',readline());

$a=(float)$linha[0];
$b=(float)$linha[1];
$c=(float)$linha[2];

if ($a+$b>$c && $a+$c>$b && $b+$c>$a){ //triangulo
    $perimetro= $a+$b+$c;
    echo 'Perimetro = '. number_format($perimetro,1,'.',''). "\n";

}else { //trapezio
    $area=($a+$b)*$c /2;
    echo 'Area = '. number_format($area,1,'.',''). "\n";
}



