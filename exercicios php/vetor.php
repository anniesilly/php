<?php
//chave associativa
$vetor=array(
    'nome'=> 'fulano da silva',
    'idade'=> '999',
    'peso' => '0.1',
    'rede social'=> 'spacehey',
    'comida fav'=> 'torta de morango'

);
print_r($vetor);

foreach ($vetor as $key => $value) {
    echo "o campo $key possui o conteudo $value" . "\n";
}