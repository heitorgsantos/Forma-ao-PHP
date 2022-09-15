<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{

    private $cargo;

    public function __construct($nome, CPF $cpf, $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function updateName($name)
    {
        return $this->nome = $name;
    }
}
