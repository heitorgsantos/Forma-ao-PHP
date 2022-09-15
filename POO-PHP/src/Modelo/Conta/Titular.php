<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;

class Titular extends Pessoa
{
    public $endereco;

    public function __construct($nomeTitular, CPF $cpf, Endereco $endereco)
    {
        parent::__construct($nomeTitular, $cpf);
        $this->endereco = $endereco;
    }



    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }
}
