<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor};

// $umFunc = new Funcionario('Heitor Gomes', new CPF('14273318717'), 'Desenvolvedor', 1000); 

$dev = new Desenvolvedor('Heitorsantos', new CPF('12345678948'), 1000);

// $dev->calculaBonificacao();

$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacoes($dev);
echo $controlador->bonificacoesTotal();
