<?php


namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

class Conta
{

    private $titular;
    private $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSacar)
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorSacar;
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

    public function transferir($valorTransferir, Conta $contaDestino)
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
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
}
