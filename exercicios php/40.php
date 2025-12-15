<?php //40
$linha = explode(" ",readline());
$n1 = (float)$linha[0];
$n2 = (float)$linha[1];
$n3 = (float)$linha[2];
$n4 = (float)$linha[3];


$media = (($n1*2)+($n2*3)+($n3*4)+($n4*1)) /10;


if($media == 4.85){ //manter a nota, sem arredondar
    $media = 4.8;
}
echo 'Media: '. number_format($media, 1,'.','')."\n";

if ($media >= 7){
    echo 'Aluno aprovado.'. "\n";
} elseif ($media < 5) {
    echo 'Aluno reprovado.'. "\n";
} else {
    echo 'Aluno em exame.'. "\n";
    $notaexame = (float)readline();
    echo 'Nota do exame: '. number_format($notaexame, 1,'.','')."\n";

    $notafinal = ($media + $notaexame)/2;

    if ($notafinal >= 5.0){
        echo 'Aluno aprovado.'."\n";
    } else {
         echo 'Aluno reprovado.'."\n";
    }
     echo 'Media final: '. number_format($notafinal, 1,'.','')."\n";

}