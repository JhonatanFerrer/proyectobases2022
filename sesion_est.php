<?php
require 'conexion.php';
//$conexion = pg_connect("host=localhost dbname=proyecto user=postgres password=postgres");
session_start();
$cur=$_POST['curso'];
$year=$_POST['anio'];
$per=$_POST['periodo'];
	$_SESSION['cur']=$cur;
	$_SESSION['year']=$year;
	$_SESSION['periodo']=$periodo;
if ($per="Periodo I"){
	$periodo="1";
}
else{
	$periodo="2";
}
if ($cur="-- Seleccione una materia --"){
	header("cursos.php");
}
else if ($year="-- Seleccione un año --"){
	header("cursos.php");
}
else if ($per="-- Seleccione un periodo --"){
	header("cursos.php");
}
else{
	header("location: Estudiantes_Inscritos.php");
}


?>

