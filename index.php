

    
 <script src="Js/Main.js"></script>  
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="imagenes/logofox.ico" type="image/x-icon">
    <link rel="stylesheet" href="./Nodos/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="Js/Main.js">
</head>
<body>


	<table class="login">

	<tr><th style="height:30px;"></th></tr>
	

	<tr> 

		
			<th style="height:150px;">
				<h1 class="miclase1">
					<i class="fad fa-user"></i>BIENVENIDO
				</h1>	
			</th>
	
		
	</tr>

	<tr>

		<td style="height:auto">

			<div class="contenedor">

		

			<form action="sesion.php" method="POST">

				<input class="usuario_boton" type="text" name="user" placeholder="Ingrese su usuario">

				<br><br>

				<input class="usuario_boton" type="password" name="pass" placeholder="Ingrese su contraseña">

				<br>

				<div class="ingresar">

					<button class="ingresar_boton" type="submit" >Ingresar</button>

				</div>

				

				

			</form>
		

			</div>
		</td>
		
	</tr>

	</table>
	

</body>
</html>

<script src="./Nodos/sweetalert/dist/sweetalert2.all.min.js"></script>

