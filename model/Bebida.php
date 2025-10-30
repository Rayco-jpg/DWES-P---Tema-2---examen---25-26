<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo {
    public $tamanio;
    public $temperatura;
    
    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamanio, $temperatura) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamanio = $tamanio;
        $this->temperatura = $temperatura;
    }

    public function getTamanio() {
        return $this->tamanio;
    }

    public function setTamanio($tamanio) {
        $this->tamanio = $tamanio;
    }

    public function getTemperatura() {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }
}