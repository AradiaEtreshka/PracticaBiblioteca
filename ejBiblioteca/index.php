<?php

require_once ('entity/Autor.php');
require_once ('entity/Libro.php');
require_once ('entity/Copia.php');
require_once ('entity/Lector.php');
require_once ('entity/Multa.php');
require_once ('entity/TipoLibro.php');
require_once ('entity/EstadoCopia.php');
require_once ('entity/Prestamo.php');



$libro1 = new Libro(1, "El señor de los anillos", TipoLibro:: novela, "Editorial Tirant Lo Blanch", 1954, "J.R.R. Tolkien");
$libro2 = new Libro(2, "Rota se camina igual", TipoLibro:: ensayo, "Hojas del Sur", 2018, "Lorena Pronsky"); 
$libro3 = new Libro(3, "El señor de los anillos 2", TipoLibro:: novela, "Editorial Tirant Lo Blanch", 1958, "J.R.R. Tolkien");

$autor1 = new Autor(1, "J.R.R. Tolkien", "España", "1937-01-01");
$autor2 = new Autor(2, "Lorena Pronsky", "Argentina", "1988-01-01");

$copia1 = new Copia(1, EstadoCopia:: biblioteca);
$copia2 = new Copia(2, EstadoCopia:: reparacion);
$copia3 = new Copia(3, EstadoCopia:: prestado);
$copia4 = new Copia(4, EstadoCopia:: biblioteca);
$copia5 = new Copia(5, EstadoCopia:: prestado);

$lector1 = new Lector(1, 2345, "Sara Rivero", 1176453634, "Villate 4563, Munro");
$lector2 = new Lector(2, 6789, "Cristian Hernandez", 1177865424, "Corrientes 3453, CABA");

$libro1->agregarCopia($copia1);
$libro1->agregarCopia($copia2);

$libro2->agregarCopia($copia3);
$libro2->agregarCopia($copia4);

$libro3->agregarCopia($copia5);

$autor1->addObra($libro1);
$autor1->addObra($libro3);

$multa1 = new Multa(1, "2018-02-01", "2018-02-01");
$multa2 = new Multa(2, "2018-04-04", "2018-03-03");

$prestamo1 = new Prestamo(1, "2018-01-01", "2018-02-02", $lector1, $copia1);
$prestamo2 = new Prestamo(2, "2018-01-01", "2018-03-03", $lector2, $copia2);
$prestamo3 = new Prestamo(3, "2018-01-01", "2018-04-04", $lector1, $copia3);


$lector1->agregarMulta($multa1);
$lector1->agregarMulta($multa2);


$lector2->agregarPrestamo($prestamo1);
$lector2->agregarPrestamo($prestamo3);
$lector2->agregarPrestamo($prestamo2);


echo $autor1->getNombre();
echo "<br>";
echo $autor1->listarObras();
echo "<br>";

echo $lector1->getNombre();
echo "<br>";
echo $lector1->listarPrestamos();
echo "<br>";
echo $lector1->listarMultas();
echo "<br>";

echo $lector2->getNombre();
echo "<br>";
echo $lector2->listarPrestamos();
echo "<br>";
echo $lector2->listarMultas();


$libro1->editarCopia(1, EstadoCopia:: prestado);



?>
