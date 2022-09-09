<?php
$peso = 84;
$altura = 1.74;

$imc = $peso / ($altura ** 2);
$format = round($imc, 2);


if ($imc < 17) {
    echo "Muito abaixo do peso";
} else if ($imc > 17 && $imc < 18.49) {
    echo "Abaixo do peso" . PHP_EOL;
} else if ($imc >= 18.5 && $imc < 24.99) {
    echo "Peso normal" . PHP_EOL;
} else if ($imc >= 25 && $imc < 29.99) {
    echo " $format Acima do peso" . PHP_EOL;
} else if ($imc >= 30 && $imc < 34.99) {
    echo "Obesidade 1" . PHP_EOL;
} else if ($imc >= 35 && $imc <= 39.99) {
    echo "Obesidade 2(severa)" . PHP_EOL;
} else {
    echo "Obesidade 3 (mórbida)";
}
