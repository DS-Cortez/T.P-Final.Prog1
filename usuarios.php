<?php
class ususarios {
    private $id_usuario;
    private $clave;
    private $nombre;
    private $apellido;

    public function __construct($id_usuario, $clave, $nombre, $apellido, ) {
        $this->id_usuario = $id_usuario;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

}