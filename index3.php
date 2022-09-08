<?php
$conta1 = [
    'titular' => 'Heitor',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 1213,
];

$contasCorrentes = [$conta1, $conta2];

for($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] . PHP_EOL;
}