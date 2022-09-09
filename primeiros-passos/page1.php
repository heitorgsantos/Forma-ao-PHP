<?php
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,

    ],
    [
        'aluno' => 'João',
        'nota' => 6,

    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,

    ]
];


// function orderNotes(array $nota1, array $nota2): int {
//     // if($nota1['nota'] > $nota2['nota']) {
//     //     return -1;
//     // }
//     // if($nota2['nota'] > $nota1['nota']) {
//     //     return 1;
//     // }
//     // return 0;
//     return $nota2['nota'] <=> $nota1['nota'];
// }

// arsort($notas, 'orderNotes');

asort($notas);
var_dump($notas);