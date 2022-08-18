<?php
require 'conexion.php';
session_start();
$cur=$_SESSION['cur'];
$year=$_SESSION['year'];
$periodo=$_SESSION['periodo'];
$nota=$_SESSION['nota'];
$nota=$_SESSION['nota'];

$_SESSION['cur']=$cur;
$_SESSION['year']=$year;
$_SESSION['periodo']=$periodo;
$_SESSION['nota']=$nota

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logofox.ico" type="image/x-icon">
    <title>Registro y Actualizacion</title>
    <link rel="stylesheet" href="css/Estudiantes_Inscritos.css">
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

    <table class="table_two">

        <tr>

            <th  id="title_table" style= "height:60px;"  colspan="3">

                <nav id="curso_docentes">ESTUDIANTES INSCRITOS</nav>


            </th>


        </tr>

        <tr>

            <th id="subtitle_table" style="height:60px" colspan="3">


            <div class="total">


                <div id="text_imagen"><h1>Notas</h1></div> 

                
            </div>
                

            </th>

        </tr>

        <tr>

            <th>

           <!-- Dentro del Div Contenido Tabla debes agregar todo --> 

                <div id="contenido_tabla">         
                    
                    <table class="registro">

                		<tr id="registro_uno">
                            <td scope="col">Codigo</td>
                			<td scope="col">Nombre</td>
                			<td scope="col">Nota</td>
                			<td scope="col">Actualizar</td>
                				
                		</tr> 

                		<?php
                		$sql = "select c.cod_est, e.nomb_est, c.valor, c.cod_cal from calificaciones c, estudiantes e where c.cod_est=e.cod_est and c.cod_cur in (select cod_cur from cursos where nomb_cur='$cur') and c.year='$year' and c.periodo='$periodo' and c.nota='$nota' order by c.cod_est";
                		$obj = pg_query($sql);
                		$i=0;
                		while ($fila = pg_fetch_array($obj)){
                		$i++;
                		?>  

                		<tr>
                			<td scope="col"><?=$fila[0]?></td>

                				

		        			<td scope="col"><?=$fila[1]?></td>
                           

                            <form action="edit_cal.php" method="POST">

                            <td style="width:10%"  scope="col"><input id="cal_no" name="calificacion" value="<?php echo $fila['2']; ?>"></td>
                            <input type="hidden" name="cod_cal" value="<?php echo $fila['3']; ?>" required>
                            
                            <td id="peque"><button class="edicion" type="submit" ><img href="#" id="imgs" src="imagenes/actualizar.png"></button></td>
                            </form>	
					        	
                		</tr>
                		
                		<?php
                		}
                		?>

                    </table>
                    
                </div>

            </th>


        </tr>

    </table>
    
    <footer>
    
    

    </footer>
    <div class="caja_padre">

    <div class="caja_hijo_cuatro"><a href='Adiccion_Actualizacion.php'><button href="#" type="submit" class="boton_uno" >Atras</button></a></div>


    </div> 
   

  
  

   

    
    
    
</body>
</html>
