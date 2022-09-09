<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

// inserindo dados na classe



// $segundaConta->setName('Heitor Gomes dos Santos');
// $segundaConta->setCpf('142.733.187-17');
// $segundaConta->depositar(1000);

$heitor = new Titular('Heitor Gomes', new CPF('14273318717'));
$contaUm = new Conta($heitor);

var_dump($contaUm);

// consulta dos dados inseridos

// echo $segundaConta->getName() . PHP_EOL;
// echo $segundaConta->getCpf() . PHP_EOL;
// echo $segundaConta->getSaldo();
