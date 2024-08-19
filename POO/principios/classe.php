<?php

class Pessoa {  //classe

    public $nome; //atributo da classe (caracteristicas por exemplo)
    
    public function falar() { //método (o que pode fazer)
        return "O meu nome é " .$this -> nome;
    }
}
 $ana= new Pessoa();
 $ana->nome = "Ana Laura";
 echo $ana->falar();
