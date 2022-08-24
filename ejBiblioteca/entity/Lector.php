<?php

class Lector
{
    //Propiedades

    public $id;
    public $nSocio;
    public $nombre;
    public $telefono;
    public $direccion;
    public $prestamos = [];
    public $multas = [];
    
    //constructor

    public function __construct($id, $nSocio, $nombre, $telefono, $direccion)
    {
        $this->id = $id;
        $this->nSocio = $nSocio;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    //getters y setters

    public function getNSocio()
    {
        return $this->nSocio;
    }


    public function setNSocio($nSocio)
    {
        $this->nSocio = $nSocio;

        return $this;
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
    

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getPrestamos()
    {
        return $this->prestamos;
    }

    public function setPrestamos($prestamos)
    {
        $this->prestamos = $prestamos;
    }

    public function getMultas()
    {
        if (empty($this->multas)) {
            return false;
        } else {
            foreach ($this->multas as $multa) {
                $multas[] = $multa;
            }
        }
    }

    public function setMultas($multas)
    {
        $this->multas = $multas;
    }

    //metodos
    

    //Agregar multa a un lector (agregar un objeto multa al arreglo de multas de un lector)

    public function agregarMulta(Multa $multa)
    {
        array_push($this->multas, $multa);
    }

    //Prestar un libro (agregar una copia al arreglo de prestamos de un lector si no tiene multas)

    public function agregarPrestamo(Prestamo $prestamo)
    {
        if(count($this->multas) == 0)
        {
            array_push($this->prestamos, $prestamo);
        }
        else
        {
            echo "El lector tiene multas, no puede pedir prestado un libro";
        }
    }

    //Listar prestamos de un lector (utilizar foreach)
    public function listarPrestamos()
    {
        foreach ($this->prestamos as $prestamo) {
            echo "Fecha de Prestamo: " . $prestamo->getFechaPrestamo()." Fecha de Devolucion: ".$prestamo->getFechaDevolucion();
            echo "<br>";
        }
    }

    //Listar multas de un lector (utilizar foreach)

    public function listarMultas()
    {
       foreach ($this->multas as $multa) {
            echo "Fecha de Inicio: " . $multa->getFInicio()." Fecha de Fin: ".$multa->getFFin();
            echo "<br>";
        }
    }


}

?>