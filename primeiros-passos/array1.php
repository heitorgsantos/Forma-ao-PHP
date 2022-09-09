<?php

$alunos2021 = [
    'Ana',
    'Maria',
    'Carlos',
    'José',
];

$novosAlunos = [
    'Henrique',
    'Juca',
    'Mateus',
];

$alunos = array_merge($alunos2021, $novosAlunos);

var_dump($alunos);