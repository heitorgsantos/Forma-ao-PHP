<?php

class CPF
{
    private $numero;

    public function __construct(string $numero)
    {
        $numeroCPF = "/^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/";
        if (preg_match($numeroCPF, $numero) === false) {
            echo "Cpf inválido";
            exit();
        }
        return $this->numero = $numero;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}



// = filter_var($numero, FILTER_VALIDATE_REGEXP, [
//     'options' => [
//         'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
//     ]
// ]);
