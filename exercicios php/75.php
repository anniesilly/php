<?php //1075
$num = readline();

for ($i= 1; $i <= 10000; $i++){
    if ($i % $num == 2) {
        echo $i . "\n";
    }
}
