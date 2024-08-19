<?php

interface Veículo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function embreiar($marcha);
}

abstract class Automovel implements Veículo { //a classe automovel usa os mesmos atributos e metodos da interface veículo, porém o automovel não pode ser instanciado por si só, 
    public function acelerar($velocidade) {     //sendo necessário especificá-lo.
        echo "O veículo acelerou até " . $velocidade . "km/h \n";
    }

    public function frenar($velocidade) {
        echo "O veículo frenou até ". $velocidade . "km/h \n";
    }
    public function embreiar($marcha) {
        echo "O veículo engatou a marcha ". $marcha;
    }
}

class Opala extends Automovel {
    public function empurrar(){

    }
}

$carro = new Opala();
$carro->acelerar(80);