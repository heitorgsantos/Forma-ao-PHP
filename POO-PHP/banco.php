<?php

require 'Conta.php';

// inserindo dados na classe

$segundaConta = new Conta();


$segundaConta->setName('Heitor Gomes dos Santos');
$segundaConta->setCpf('142.733.187-17');
$segundaConta->depositar(1000);

// consulta dos dados inseridos

echo $segundaConta->getName() . PHP_EOL;
echo $segundaConta->getCpf() . PHP_EOL;
echo $segundaConta->getSaldo();
