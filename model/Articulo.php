<?php
// Clase Artículo
class articulo{
    public $nombre;
    public $precio;
    public $disponibilidad;
    public $categoria;

    public function __construct($nombre, $precio, $disponibilidad, $categoria) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
        $this->categoria = $categoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getDisponible() {
        return $this->disponibilidad;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setDisponible($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

}
?>