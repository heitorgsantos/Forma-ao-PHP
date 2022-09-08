<?php
function resposta($mensagem)
{
    echo $mensagem . '<br>';
}

function sacar($conta, float $valorSacar)
{
    if ($valorSacar > $conta['saldo']) {
        resposta("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDepositar): array
{
    if ($valorDepositar > 0) {

        $conta['saldo'] += $valorDepositar;
    } else {
        echo "Depositos precisam ser positivos" . PHP_EOL;
    }

    return $conta;
}

function letrasMaiusculas(array &$conta) {
    $conta['titular'] = strtoupper($conta['titular']);   
}

function htmlText(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular. Saldo: $saldo</li>";
}