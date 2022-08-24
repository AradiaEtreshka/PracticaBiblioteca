<?php

class Copia
{
    //Propiedades

    public $id;
    public $estado;
    
    //Constructor

    public function __construct($id, $estado)
    {
        $this->id = $id;
        $this->estado = $estado;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    //Métodos

    public function prestar()
    {
        $this->estado = EstadoCopia::prestado;
    }

    public function devolver()
    {
        $this->estado = EstadoCopia::biblioteca;
    }

    public function retrasar()
    {
        $this->estado = EstadoCopia::retraso;
    }

    public function reparar()
    {
        $this->estado = EstadoCopia::reparacion;
    }

    public function toString()
    {
       return $this->id . " " . $this->estado;
    }
}

?>