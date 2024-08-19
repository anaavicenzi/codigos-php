<?php

$a = 10;

function trocaValor($a) { //imagine que a variavelé $b
    $a += 50;
    return $a;
}

echo trocaValor($a); echo "\n";
echo $a;

//isso acontece porque há um espaço na memória reservado para a variável (de valor 10 neste caso) e outro apenas o que acontece dentro da função, não convertendo esse valor 
//para o resto da variavel. isso é conhecido como PARAMETRO POR VALOR. "o que acontece na função fica na função.