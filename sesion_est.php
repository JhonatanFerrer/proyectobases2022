<?php
require 'conexion.php';
//$conexion = pg_connect("host=localhost dbname=proyecto user=postgres password=postgres");
session_start();
$cur=$_POST['curso'];
$year=$_POST['anio'];
$per=$_POST['periodo'];
$usuario=$_SESSION['nombre_usuario'];
	$_SESSION['cur']=$cur;
	$_SESSION['year']=$year;
	$_SESSION['periodo']=$periodo;
if ($per="Periodo I"){
	$periodo="1";
}
else{
	$periodo="2";
}
if($cur!="-- Seleccione una materia --" && $year!="-- Seleccione un año --" && $per!="-- Seleccione un periodo --"){
	$_SESSION['cur']=$cur;
	$_SESSION['year']=$year;
	$_SESSION['cur']=$cur;
	$_SESSION['periodo']=$periodo;
	$_SESSION['nombre_usuario']=$usuario;
	header("location: Estudiantes_Inscritos.php");
}
else{
	

	$_SESSION['nombre_usuario']=$usuario;
	header("location: cursos.php");
}

?>

