<?php

abstract class Animal {    //a classe é abstrata pois não poderá ser instanciada apenas como "animal", sendo necessário especificar que animal é esse.
    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Anda";
    }
}