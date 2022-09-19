<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{


    protected function percentualTarifa()
    {
        return 0.05;
    }

    public function transferir($valorTransferir, Conta $contaDestino)
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}
