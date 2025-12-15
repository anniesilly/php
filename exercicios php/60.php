<?php

$cont=0;
for($i = 0; $i < 6; $i++){
    $num=(float)readline();
    if($num>0){
        $cont++;
    }
}
echo $cont . " valores positivos" . "\n";