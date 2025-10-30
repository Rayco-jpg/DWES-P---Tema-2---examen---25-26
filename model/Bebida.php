<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo {
    public $tamanio;
    
    public function __construct($nombre, $precio, $disponibilidad, $categoria, $tamanio) {
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this->tamanio = $tamanio;
    }

    public function getTamanio() {
        return $this->tamanio;
    }

    public function setTamanio($tamanio) {
        $this->tamanio = $tamanio;
    }
}