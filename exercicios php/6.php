<?php
$n1 = (float)readline("digite nota:");
$n2 = (float)readline("digite nota:");
$n3 = (float)readline("digite nota:");

$media = (($n1 * 2.0) + ($n2 * 3.0) + ($n3 * 5.0)) / 10;

echo "MEDIA = " . number_format($media, 1, ".","") . "\n";

