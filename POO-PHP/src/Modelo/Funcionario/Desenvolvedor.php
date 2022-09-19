<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        return $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao() {
        return 500.0;
    }
}
