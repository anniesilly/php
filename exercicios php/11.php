<?php //1011
$r = (float)readline('digite o valor do raio: ');
$vol = (4/3) * 3.14159 * pow($r,3);


echo 'VOLUME = ' . number_format($vol, 3, '.', '') . "\n";
