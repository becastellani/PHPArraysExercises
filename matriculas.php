<?php

$alunos2021 = [
    'João',
    'Roberto',
    'Roberto',
    'Julio',
    'Maria',
];


$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021,'Bernardo', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';


array_unshift($alunos2022, 'Valentina', 'Carlos');
var_dump($alunos2022);
