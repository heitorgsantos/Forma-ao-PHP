<?php

require_once 'functions.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 100);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorDepositar: 5);


letrasMaiusculas($contasCorrentes['123.456.789-10']);
// unset($contasCorrentes['123.456.789-10']);

// echo "<ol>";
// foreach ($contasCorrentes as $cpf => $conta) {

//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//    htmlText($conta);
// }
// echo"</ol>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h2><?= $conta['titular']?> - <?= $cpf?> </h2>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
