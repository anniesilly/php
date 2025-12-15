<?php
$linha=explode(' ',readline());

$a=(int)$linha[0];
$b=(int)$linha[1];

if ($a % $b==0 || $b % $a==0) {
    echo 'Sao Multiplos'. "\n";
}
else {
    echo 'Nao sao Multiplos'. "\n";
}