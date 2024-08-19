<?php

$total = 101;
$desconto = 0.9;

//o do whle executara a função pelo menos uma vez

do {
    $total *=$desconto;
} while ($total > 100);

echo "$total";
