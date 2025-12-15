<?php
$idade = (int)readline('idade: ');
if ($idade >= 18) {
    echo "maior de idade";
}
?>

<?php
$num = readline();
if ($num %2 == 0) {
    echo 'numero par';
} else {
    echo 'numero impar';
}
?>

<?php
$nota = (float)readline();
if ($nota <= 0 && 5.0) {
    echo "insuficiente";
} else if ($nota == 5.1 && 6.9){
    echo 'suficiente';
}