<?php

class Multa
{
    //Propiedades

    public $id;
    public $fInicio;
    public $fFin;
    
    //constructor

    public function __construct($id, $fInicio, $fFin)
    {
        $this->id = $id;
        $this->fInicio = $fInicio;
        $this->fFin = $fFin;
    }

    //getters y setters

    public function getFInicio()
    {
        return $this->fInicio;
    }

    public function setFInicio($fInicio)
    {
        $this->fInicio = $fInicio;

        return $this;
    }
 
    public function getFFin()
    {
        return $this->fFin;
    }

    public function setFFin($fFin)
    {
        $this->fFin = $fFin;

        return $this;
    }


    public function getMulta()
    {
        return $this->multa;
    }

}

?>