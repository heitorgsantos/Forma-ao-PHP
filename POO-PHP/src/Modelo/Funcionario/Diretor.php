<?php

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario() * 2;
    }
}
