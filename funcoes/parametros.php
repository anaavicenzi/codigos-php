<?php

function ola($texto = "mundo", $periodo = "Bom dia") {
    return "Olá $texto \n, $periodo";
}

echo ola("", "Bom dia");
echo ola("Ana", "Boa noite");
    