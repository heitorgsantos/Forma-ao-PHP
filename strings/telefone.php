<?php

$telefones = ['(51) 99945 - 4545', '(52) 95456 - 4545 '];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match('/(\([0-9]{2}\)) [0-9]{5} - [0-9]{4}/', $telefone);
}

if($telefoneValido) {
    echo 'Telefone Válido' . PHP_EOL;
}else {
    echo "Telefone Inválido" . PHP_EOL;
}