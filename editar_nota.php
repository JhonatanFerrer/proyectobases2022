<?php
require 'conexion.php';
session_start();
$cur=$_SESSION['cur'];
$year=$_SESSION['year'];
$periodo=$_SESSION['periodo'];
$nota=$_POST['nota'];

$_SESSION['cur']=$cur;
$_SESSION['year']=$year;
$_SESSION['periodo']=$periodo;
$_SESSION['nota']=$nota;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logofox.ico" type="image/x-icon">
    <title>Document</title>
    <link rel="stylesheet" href="css/Insercion_notas.css">
</head>
<body>

	<header>
        <div class="contenedor">
            <nav class="header">
                
                    <h1>REGISTRO DE NOTAS</h1><br>
                    <h2 id="demo"></h2>
                            <script>

                            var fecha = new Date();
                            var month = fecha.getUTCMonth() + 1;
                            var day = fecha.getUTCDate() -1;
                            var year = fecha.getUTCFullYear();
                            document.getElementById("demo").innerHTML = day+"/"+month+"/"+year;

                            </script>
                 
                
            </nav>
        </div>
    </header>

	<div class="title">
        <nav class="subtitle">
        <?php
            echo "<h1>CURSO: $cur</h1>"
            ?>
        </nav>
    </div>


	<center>
	<table class="insertar_notas">

    <tr><th id="pequeñito">

    <div class="salir">

		<a href='Adiccion_Actualizacion.php'> <button id="two"><img style="width:100%" style="height:100%" src="imagenes/salir.png"></im></button></a> 

	</div>

    </tr></th>

	<tr>

	<th id="peque">
		<h1 class="title_Table"><i class="fad fa-user"></i>ACTUALIZAR</h1>
	</th>

	</tr>

	<tr>

	<td> 

    <div class="bloque_padre">

    <div class="bloque_hijo_uno">

	    <form action="edit_nota.php" method="POST">
		<input style="height:40px" type="text" name="desc" placeholder="Descripcion de la nota">

    </div>

    <div class="bloque_hijo_dos">
		
		<input type="number" name="porc" placeholder="Porcentaje de la nota">
		
    </div>

    <div class="bloque_hijo_tres">

        <input type="number" name="pos" placeholder="Posicion de la nota">
	
    </div>

    <div class="bloque_hijo_boton">

		<button id="xd" type="submit" >Ingresar</button>
	    </form>

    </div>

	</td>

	</tr>


	</table>

	</center>

</body>
</html>
