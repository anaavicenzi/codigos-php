<?php

class Endereço {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct() {
        var_dump("DESTRUIR");
    }

    public function __toString() {

        return $this -> logradouro. ", " .$this -> numero. ", " .$this -> cidade;
    }
}

$meuEndereço = new Endereço("Rua Rui Pfutzenreuter", "40", "Criciúma");

echo $meuEndereço;
