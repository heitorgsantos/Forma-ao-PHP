<?php

class Conta
{

    private $cpf;
    private $nome;
    private $saldo = 0;

    public function __construct(string $nome, string $cpf)
    {
        $this->validateName($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = 0;
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

    // public function setCpf(string $cpf)
    // {
    //     return $this->cpf = $cpf;
    // }

    public function getCpf()
    {
        return $this->cpf;
    }

    // public function setName(string $nome)
    // {
    //     return $this->nome = $nome;
    // }

    public function getName()
    {
        return $this->nome;
    }

    private function validateName(string $nome) {
        if(strlen($nome) < 5 ){
            echo "Insira seu nome completo";
            exit;
        }
    }
}
