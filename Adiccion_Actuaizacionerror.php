<?php
require 'conexion.php';
session_start();
$cur=$_SESSION['cur'];
$year=$_SESSION['year'];
$periodo=$_SESSION['periodo'];

$_SESSION['cur']=$cur;
$_SESSION['year']=$year;
$_SESSION['periodo']=$periodo;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiccion y Actualizacion</title>
    <link rel="stylesheet" href="css/Adiccion_Actualizacion.css">
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

    <div class="titulo">
        <nav class="subtitle"><h1>CREAR NOTAS CURSO</h1></nav>
    </div>

  
    <table class="table">

        <tr>

            <th  id="title_table" style= "height:60px;"  colspan="3">

                <nav id="curso_docentes">ESTUDIANTES INSCRITOS</nav>


            </th>


        </tr>

        <tr>

            <th id="subtitle_table" style="height:60px" colspan="3">


            <div class="total">


                <div id="imagen">
                    <a href='insercion_notas.php'> <button><img src="imagenes/mas.png"></im></button></a>
                </div>

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
                            <td scope="col">Posicion</td>
                            <td scope="col">Descripcion</td>
                            <td scope="col">Porcentajes</td>
                            <td scope="col">Editar</td>
                            <td scope="col">Borrar</td>
                            <td scope="col">Registrar</td>
                            
                                    
                    </tr> 

                            <?php
                            $sql = "select posicion, desc_nota, porcentaje, nota from notas where cod_cur in (select cod_cur from cursos where nomb_cur='$cur') and year='$year' and periodo='$periodo' order by posicion";
                            $obj = pg_query($sql);
                            $i=0;
                            while ($fila = pg_fetch_array($obj)){
                            $i++;
                            ?>    

                    <tr>
                                
                            <td scope="col"><?=$fila[0]?></td>
                            <td scope="col"><?=$fila[1]?></td>
                            <td scope="col"><?=$fila[2]?></td>


                                <form action="editar_nota.php" method="POST">
                                <input type="hidden" name="nota" value="<?php echo $fila['3']; ?>">
                                <td id="peque"><button class="edicion" type="submit" ><img href="#" id="imgs" src="imagenes/editar.png"></button></td>
                                </form>	

                                <form action="del_nota.php" method="POST">
                                <input type="hidden" name="nota" value="<?php echo $fila['3']; ?>">
                                <td id="peque"><button class="edicion" type="submit" ><img href="#" id="imgs" src="imagenes/trash.png"></button></td>
                                </form>	

                                <form action="sesion_cal.php" method="POST">
                                <input type="hidden" name="nota" value="<?php echo $fila['3']; ?>">
                                <td id="peque"><button class="edicion" type="submit" ><img href="#" id="imgs" src="imagenes/registrar.png"></button></td>
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

    <div id="Notita">

    <nav class="subtitle">
        <h1>POR FAVOR, RECUERDE QUE NO PUEDE PASAR DEL 100% ENTRE LAS NOTAS AGREGADAS, NI REPETIR LA POSICION DE LAS NOTAS!</h1>
    </nav>

    </div>
    
    

    </footer>
    <div class="caja_padre">

    <div class="caja_hijo_uno"><a href='cursos.php'><button href="#" type="submit" class="boton_uno" >Salir</button></a></div>

<div class="caja_hijo_tres"><a href='Estudiantes_Inscritos.php'><button href="#" type="submit" class="boton_uno" >Estudiantes inscritos</button></a></div>

    <div class="caja_hijo_dos"><a href='Reporte_Notas.php'><button href="#" type="submit" class="boton_uno" >Reporte de notas</button></a></div>


    </div> 

    
    
    
</body>
</html>
