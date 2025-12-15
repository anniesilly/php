<?php
$linha = explode(' ',readline('numeros: '));

$n1=(float)$linha[0];
$n2=(float)$linha[1];
$op =readline('operação: ');

switch ($op) {
    case '+':
        $total= ($n1+$n2);
        echo 'total: '. $total;
        break;
    
    case '-':
       $total= ($n1-$n2);
        echo 'total: '. $total;
        break;

    case '*':
        $total= ($n1*$n2);
        echo 'total: '. $total;
        break;

    case '/':
        if($n2==0){
            echo 'não existe divisão por zero';
            break;
        }
        else { 
            $total= ($n1/$n2);
            echo 'total: '. $total;
            break;
        }
    
    default:
        echo 'inválido';
        break;
}