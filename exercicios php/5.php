<?php
$n1 = (float)readline("digite nota:");
$n2 = (float)readline("digite nota:");

$media = (($n1 * 3.5) + ($n2 * 7.5)) / 11;

echo "MEDIA = " . number_format($media, 5, ".","") . "\n";

