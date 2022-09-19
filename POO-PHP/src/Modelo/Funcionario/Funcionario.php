<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{

    private $salario;

    public function __construct($nome, CPF $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
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
        return $this->salario = $valorAumento;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao();
}
