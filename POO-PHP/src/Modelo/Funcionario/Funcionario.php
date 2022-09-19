<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{

    private $cargo;
    private $salario;

    public function __construct($nome, CPF $cpf, $cargo, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function updateName($name)
    {
        return $this->nome = $name;
    }

    public function recebeAumento($valorAumento)
    {
        if ($valorAumento < 0) {
            echo 'Aumento deve ser positivo';
        }
        return;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }


    public function calculaBonificacao()
    {
        return $this->salario * 0.1;
    }
}
