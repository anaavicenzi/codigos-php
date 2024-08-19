<?php

$a = 10;

function trocaValor(&$a) { //adicionando um & na função, o que acontece nela é adicionado na variavel de todo o codigo.
    $a += 50;
    return $a;
}

echo trocaValor($a); echo "\n";
echo $a;