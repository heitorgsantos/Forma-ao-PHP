<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';
require_once 'Endereco.php';

// inserindo dados na classe



// $segundaConta->setName('Heitor Gomes dos Santos');
// $segundaConta->setCpf('142.733.187-17');
// $segundaConta->depositar(1000);

$adress = new Endereco('Ibatiba', 'Novo Horizonte', 'Olindo Florindo', '79');

$heitor = new Titular('Heitor Gomes', new CPF('14273318717'), $adress);

$contaUm = new Conta($heitor,);

// $joao = new Titular('Joao Maria', new CPF('12345678912'));
// $contaDois = new Conta($joao);

// echo $contaUm->depositar(500);

// echo $contaUm->transferir(100, $contaDois);

// var_dump($contaDois);

echo $adress->getCidade();

// var_dump($contaUm);

// consulta dos dados inseridos

// echo $segundaConta->getName() . PHP_EOL;
// echo $segundaConta->getCpf() . PHP_EOL;
// echo $segundaConta->getSaldo();
