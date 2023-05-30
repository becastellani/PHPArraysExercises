<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if(is_array($notas)){
    echo 'Sim é um array' . PHP_EOL;
}
var_dump(array_is_list($notas));

echo 'Ana fez a prova:' .PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguem tirou 10?' . PHP_EOL;
 var_dump(in_array(10,$notas));



echo 'Quem tirou 10?' . PHP_EOL;
$nota10 = array_search(10, $notas);
echo $nota10;

//array_key_exists() == verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se a chave existe e não é nula