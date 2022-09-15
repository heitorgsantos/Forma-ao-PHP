<?php

spl_autoload_register(function ($path) {
    $caminho = str_replace('Alura\\Banco', 'src', $path);
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    $caminho .= '.php';
    echo $caminho;

    if(file_exists($caminho)) {
        require_once $caminho;
    }
});

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;

// $person = new Pessoa('Heitor Gomes', new CPF('14273318717'));
$fun = new Funcionario('Heitor Gomes', new CPF("14273318717"), 'Supervisor');

$fun->updateName("Maria Joao");

var_dump($fun);
exit();

// $adress = new Endereco('Ibatiba', 'Novo Horizonte', 'Olindo Florindo', '79');

// // $newAddress = $adress->novoEnd("Iuna", "Santa", "Trinta", '79b');

// $heitor = new Titular('Heitor Gomes', new CPF('14273318717'), $adress);



// $contaUm = new Conta($heitor,);



// var_dump($contaUm);
