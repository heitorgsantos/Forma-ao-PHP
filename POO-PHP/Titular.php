<?php

class Titular
{
    private $nomeTitular;
    private $cpf;

    public function __construct(string $nomeTitular, CPF $cpf )
    {
        $this->cpf = $cpf;
        $this->validateName($nomeTitular);
        $this->nomeTitular = $nomeTitular;
    }

    public function getCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    public function getName()
    {
        return $this->nomeTitular;
    }

    private function validateName(string $nome) {
        if(strlen($nome) < 5 ){
            echo "Insira seu nome completo";
            exit();
        }
    }
}
