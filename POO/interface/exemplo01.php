<?php

interface Veículo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function embreiar($marcha);
}

class Carro implements Veículo {
    public function acelerar($velocidade) {
        echo "O veículo acelerou até " . $velocidade . "km/h \n";
    }

    public function frenar($velocidade) {
        echo "O veículo frenou até ". $velocidade . "km/h \n";
    }
    public function embreiar($marcha) {
        echo "O veículo engatou a marcha ". $marcha;
    }

}

$civic = new Carro();
$civic->acelerar("70");
$civic->embreiar("2");
$civic->frenar("20");
