<?php

// function gerarEmail($name): void
// {
//     $conteudoEmail = <<<FIM
//     Olá, $name!
//     Estamos entrando em contato para o 
//     {motivo do contato}
//     {assinatura}
//     FIM;
//     echo $conteudoEmail . PHP_EOL;
// }
// gerarEmail('heitor');

$texto = 'Texto com poxa e caramba';

echo str_replace(['poxa', 'caramba'], ['p***', 'c******'], $texto) . PHP_EOL;