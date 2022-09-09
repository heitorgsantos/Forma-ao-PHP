<?php

class Conta
{

    private $cpf;
    private $nome;
    private $saldo = 0;

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

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function setCpf(string $cpf) {
        return $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setName(string $nome) {
        return $this->nome = $nome;
    }

    public function getName(){
        return $this->nome;
    }
}

$primeiraConta = new Conta();
// $primeiraConta->saldo = 500;
// $primeiraConta->cpf = '142.733.187-17';
// $primeiraConta->nome = "Heitor Gomes dos Santos";

$segundaConta = new Conta();
// $segundaConta->novoCadastro('Joao', 142123456789, 500);

// $primeiraConta->sacar(100);

$segundaConta->setName('Heitor Gomes dos Santos');
$segundaConta->setCpf('142.733.187-17');
$segundaConta->depositar(1000);

// $primeiraConta->transferir(100, $segundaConta);

echo $segundaConta->getName();
echo $segundaConta->getCpf();


// var_dump($segundaConta);

// var_dump($primeiraConta);
