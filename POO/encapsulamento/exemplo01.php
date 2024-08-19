<?php

class Pessoa {
    public $nome = "João";
    protected $idade = 36;
    private $senha = "123456";

    public function mostrarDados() { //como está na mesma classe esse método poderá mostrar tudo, até o que é privado ou protegido
        echo $this -> nome . "\n";
        echo $this -> idade . "\n";
        echo $this -> senha . "\n";
    }
}

$objeto = new Pessoa();

// echo $objeto->idade;

$objeto -> mostrarDados();