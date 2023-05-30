<?php
$notasBimestre1 = [
    'João' =>  6,
    'Roberto' => 8,
    'Roberto' => 10,
    'Julio' => 7,
    'Maria' => 9,
];


$notasBimestre2 = [
    'João' =>  8,
    'Julio' => 9,
    'Maria' => 7,
];

$alunosFaltantes = (array_diff($notasBimestre1, $notasBimestre2));
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

//$array1 = [1, 2, 3];
//$array2 = [3, 4, 5];
//$array3 = [1, 7, 13];
//
//$diferenca = array_diff($array1, $array2, $array3);
//var_dump($diferenca);