<?php

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario();
    }
}
