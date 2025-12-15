<?php //1017
$hr = (int)readline();
$litro = (int)readline();

$distancia = $hr * $litro / 12;
echo "" . number_format($km, 3, ".", "") . "\n";

?>



<?php //1019
$tempo = (int)readline();

$hora = (int)($tempo / 3600);
$resto = $tempo %3600;

$min = (int)($resto / 60);
$segundo = $resto % 60;

echo "$hora:$min:$segundo" . "\n";