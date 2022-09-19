<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao()
    {
        return $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}
