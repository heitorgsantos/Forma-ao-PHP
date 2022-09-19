<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    protected $totalBonificacoes = 0;

    public function addBonificacoes(Funcionario $funcionario)
    {
        return $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function bonificacoesTotal() {
        return $this->totalBonificacoes;
    }
}
