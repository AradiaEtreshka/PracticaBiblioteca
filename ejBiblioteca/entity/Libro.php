<?php

class Libro 
{
    //Propiedades

    public $id;
    public $nombre;
    public $tipo;
    public $editorial;
    public $year;
    public $autor;
    public $copias = [];
    
    //constructor

    public function __construct($id, $nombre, $tipo, $editorial, $year, $autor)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->editorial = $editorial;
        $this->year = $year;
        $this->autor = $autor;
    }
     
    //getter y setter

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

 
    public function getEditorial()
    {
        return $this->editorial;
    }

 
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;

        return $this;
    }


    public function getYear()
    {
        return $this->year;
    }


    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getCopias()
    {
        return $this->copias;
    }

    public function setCopias($copias)
    {
        $this->copias = $copias;
    }

    //Metodos

    //Listar de copias de libros (utilizar foreach)
    public function listarCopias()
    {
        foreach ($this->copias as $copia) {
            echo $copia->getEstado();
        }
    }

    //Agregar, editar y eliminar una copia de un libro (realizar operaciones sobre el arreglo de copias de un Libro)

    public function agregarCopia(Copia $copia)
    {
        array_push($this->copias,$copia);
    }

    public function editarCopia($id, $estado)
    {
        foreach($this->copias as $copia)
        {
            if($copia->getId() == $id )
            {
                echo "se ha editado el estado de la copia de " . $copia->getEstado();
                $copia->setEstado($estado);
                echo "<br> a " . $copia->getEstado();
            }

        }

    }
    public function eliminarCopia(Copia $copia)
    {
        unset($this->copias[$copia->getId()]);
    }

}

?>