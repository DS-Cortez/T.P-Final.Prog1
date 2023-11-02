<?php
class docentes{
    private $num_matricula;
    private $nombre;
    private $apellido;
    private $materia;

    public function __construct($num_matricula, $nombre, $apellido, $materia) {
        $this->num_matricula = $num_matricula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->materia = $materia;
    }

}