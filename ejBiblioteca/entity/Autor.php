<?php

class Autor
{
    //Propiedades

    public $id;
    public $nombre;
    public $nacionalidad;
    public $fechaDeNacimiento;
    public $obras = [];
    

    // constructor

   public function __construct($id, $nombre, $nacionalidad, $fechaDeNacimiento)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->fechaDeNacimiento = $fechaDeNacimiento;
    }

    //getters y setters

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }
 
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

 
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    public function getObras()
    {
        return $this->obras;
    }

    public function setObras($obras)
    {
        $this->obras = $obras;
        return $this;
    }

    // metodos

    public function addObra(Libro $obra)
    {
        $this->obras[] = $obra;
    }

    public function removeObra(Libro $obra)
    {
        $this->obras = array_diff($this->obras, [$obra]);
    }

    public function listarObras()
    {
        foreach ($this->obras as $obra) 
        {
            echo "<br>";
            echo $obra->getNombre();
            echo "<br>";
            echo $obra->getYear();
            echo "<br>";

        }
    } 

    function __toString()
    {
        return $this->nombre . " " . $this->nacionalidad . " " . $this->fechaDeNacimiento;
    }

}


?>