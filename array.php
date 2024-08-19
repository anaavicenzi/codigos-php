<?php

$pessoas = [];

//array_push: funçao para adicionar itens na array depois que ela já foi criada

array_push($pessoas, array(
    'nome'=>'João', //coloca primeiro o nome da array e depois oq quer adicionar. neste caso é criada outra array que cria chaves (variaveis) e os valores consecutivamente.
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Ana',
    'idade'=>18

));

echo $pessoas [1]['nome'];