<?php //41
$linha = explode(' ',readline());
$x =(float)$linha[0];
$y =(float)$linha[1];

if ($x==0 && $y==0){
    echo 'Origem' ."\n";
} 
elseif ($x > 0 && $y > 0) {
    echo 'Q1'."\n";
}
elseif ($x < 0 && $y > 0) {
    echo 'Q2'."\n";
}
elseif ($x < 0 && $y < 0) {
    echo 'Q3'."\n";
}
elseif ($x > 0 && $y < 0) {
    echo 'Q4'."\n";
}
elseif ($x != 0 && $y==0) {
    echo 'Eixo X'."\n";
}
elseif ($y != 0 && $x==0) {
    echo 'Eixo Y'."\n";
}
