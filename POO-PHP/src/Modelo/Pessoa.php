<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected $nome;
    private $cpf;


    public function __construct($nome, CPF $cpf)
    {
        $this->validateName($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    private function validateName(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Insira seu nome completo";
            exit();
        }
    }
}
