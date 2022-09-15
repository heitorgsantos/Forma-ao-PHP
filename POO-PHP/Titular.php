<?php

class Titular
{
    private $nomeTitular;
    private $cpf;
    private $endereco;

    public function __construct(string $nomeTitular, CPF $cpf, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validateName($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->endereco = $endereco;
    }

    public function getCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    public function getName()
    {
        return $this->nomeTitular;
    }

    private function validateName(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Insira seu nome completo";
            exit();
        }
    }
}
