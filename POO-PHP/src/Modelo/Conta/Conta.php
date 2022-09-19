<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{

    private $titular;
    protected $saldo = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }


    public function sacar(float $valorSacar)
    {
        $tarifaSaque = $valorSacar * $this->percentualTarifa();
        $valorSaque = $valorSacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorSaque;
        }
    }

    public function depositar(float $valorDepositar)
    {
        if ($valorDepositar < 0) {
            echo "Você só pode depositar valores positivos" . PHP_EOL;
            return;
        }
        $this->saldo += $valorDepositar;
    }



    public function getSaldo(): float
    {
        return $this->saldo;
    }



    public function recuperaNomeTitular()
    {
        return $this->titular->getNome();
    }

    public function recuperaCpfTitular()
    {
        return $this->titular->getCpf();
    }

    abstract protected function percentualTarifa();
}
