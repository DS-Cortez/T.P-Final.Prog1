<?php
class examenes {
    private $materia_examen;
    private $nota_examen;
    private $docente_mesa;
    private $fecha_mesa;

    public function __construct($materia_examen, $nota_examen, $docente_mesa, $fecha_mesa) 
    {
        $this->materia_examen = $materia_examen;
        $this->nota_examen = $nota_examen;
        $this->docente_mesa = $docente_mesa;
        $this->fecha_mesa = $fecha_mesa;
    }

}