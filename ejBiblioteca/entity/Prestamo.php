<?php

class Prestamo

{

    //propiedades

    public $id;
    public $fechaPrestamo;
    public $fechaDevolucion;
    public $lector;
    public $copia;


    //constructor 

    public function __construct($id, $fechaPrestamo, $fechaDevolucion, $lector, $copia)
    {
        $this->id = $id;
        $this->fechaPrestamo = $fechaPrestamo;
        $this->fechaDevolucion = $fechaDevolucion;
        $this->lector = $lector;
        $this->copia = $copia;
    }

    //getters y setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFechaPrestamo()
    {
        return $this->fechaPrestamo;
    }

    public function setFechaPrestamo($fechaPrestamo)
    {
        $this->fechaPrestamo = $fechaPrestamo;
    }

    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;
    }

    public function getLector()
    {
        return $this->lector;
    }

    public function setLector($lector)
    {
        $this->lector = $lector;
    }

    public function getCopia()
    {
        return $this->copia;
    }

    public function setCopia($copia)
    {
        $this->copia = $copia;
    }


    //metodos

    public function __toString()
    {
        return "Prestamo [id=" . $this->id . ", fechaPrestamo=" . $this->fechaPrestamo . ", fechaDevolucion=" . $this->fechaDevolucion . ", lector=" . $this->lector . ", copia=" . $this->copia . "]";
    }

    //editar prestamo

    public function editarPrestamo($fechaPrestamo, $fechaDevolucion)
    {
        $this->fechaPrestamo = $fechaPrestamo;
        $this->fechaDevolucion = $fechaDevolucion;
    }

    //devolver prestamo

    public function devolverPrestamo()
    {
        $this->fechaDevolucion = new \DateTime();
    }

    //prestamo vencido

    public function prestamoVencido()
    {
        $fechaActual = new \DateTime();
        $fechaDevolucion = $this->fechaDevolucion;
        $diferencia = $fechaActual->diff($fechaDevolucion);
        $dias = $diferencia->days;
        if ($dias > 0) {
            return true;
        } else {
            return false;
        }
    }

}


?>