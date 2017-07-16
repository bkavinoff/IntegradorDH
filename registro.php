<?php

require_once "validaciones.php";
require_once "usuarios.php";

// Inicializar mi usuario

$fueCompletado = isset($_REQUEST['submitted']);
$errores   = 0 ;

if ($fueCompletado) {
    $resultado = guardarUsuario($_REQUEST['nombre'], $_REQUEST['apellido'], $_REQUEST['correo'], $_REQUEST['username'], $_REQUEST['password'], $_FILES['avatar']);

    if (is_array($resultado) && ! empty($resultado)) {
        echo "Hubo errores";
      }
    else {
        echo "Usted se registro correctamente";
      }
 }

?>

<!DOCTYPE html>
<html>
	<head>
    <title>REGISTRACION</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css1/bootstrap.css">
		<link rel="stylesheet" href="css1/estilos.css">
	</head>
	<body>

<div class="container">
		<!--//////////////<MENU SUPERIOR>///////////////-->
		<nav class="navbar"><!--   navbar-inverse  -->
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Integrador DH</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Inicio</a></li>
							<li><a href="faq.php">F.A.Q.</a></li>
							<li><a href="registro.php">Registrarse</a></li>
							<li><a href="ingresar.php">Ingresá</a></li>
						</ul>
					</div>
				</div>
			</nav>
		<!--//////////////</MENU SUPERIOR>///////////////-->

		<!--//////////////<CABECERA>///////////////-->
		<div class="main-header">
			<div class="jumbotron text-center">
					<h1>REGISTRACIÓN</h1>
					<p class = "parrafo">Por favor ingresa los siguientes datos para registrarte. Todos los campos son obligatorios.</p>
				</div>
			</div>
		<!--//////////////<CABECERA>///////////////-->

			<!--//////////////<CONTENIDO>///////////////-->

		<header class ="fondoregistracion">
		<form id='register' action='registro.php' method='post' enctype="multipart/form-data">
				<fieldset >
		<br>

		<input type='hidden' name='submitted' id='submitted' value='1'/>

		<div><span class='error'></span></div>
			<div class="container2">
	      <div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
		      	<label class= "cuadro" for="Nombre"></label>
		        	<input type="text" placeholder="Nombre" name="nombre" id= "nombre" value= '' maxlength="50" required>
							<span style="color: red"  class='error'>
									<?php
											if (isset($errores['nombre'])) {
													echo "El nombre ingresado no es valido";
											}
									?>
							</span>
					</div>
				</div>
			</div>
			<br>

			<div class="container2">
			   <div class="row">
					 <div class="col-lg-5 col-md-5 col-xs-5">
 				 			<label class= "cuadro" for="Apellido"></label>
 					 			<input type="text" placeholder="Apellido" name="apellido" id = "apellido" maxlength="50" required>
								<span style="color: red"  class='error'>
										<?php
												if (isset($errores['apellido'])) {
														echo "El apellido ingresado no es valido";
												}
										?>
							</span>
						</div>
				</div>
			</div>
			<br>

			<div class="container2">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
 		      	<label class= "cuadro" for="E-mail"></label>
 		        	<input type="text" placeholder="E-mail" name="correo" id = "correo" value=""  maxlength="50" required>
							<span style="color: red"  class='error'>
									<?php
											if (isset($errores['correo'])) {
													echo "El E-mail ingresado no es valido";
											}
									?>
							</span>
						</div>
				</div>
			</div>
			<br>

			<div class="container2">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
					<label class= "cuadro" for='username'></label>
						<input type='text' placeholder="Nombre de Usuario" name='username' id='username' value='' maxlength="50" /><br/>
						<span style="color: red"  class='error'>
							<?php
									if (isset($errores['username'])) {
											echo "El username ingresado no es valido";
									}
							?>
					</span>
			</div>
		</div>
	</div>
	<br>

			<div class="container2">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
 					 <label class= "cuadro" for="Contraseña"></label>
 						 <input type="password" placeholder="Password" name="password" id = "password" maxlength="50" required>
						 <span style="color: red"  class='error'>
								 <?php
										 if (isset($errores['password'])) {
												 echo "El password ingresado no es valido";
										 }
								 ?>
						 </span>
				 </div>
				</div>
			</div>
		 <br>
	   <br>

		 <div class='container'>
 				<label for='username' >Avatar:</label><br/>
 				<input type='file' name='avatar'/><br/>
 				<span id='register_username_errorloc' class='error'></span>
 		</div>

				 <div class="col-lg-2 col-md-2 col-xs-2">
		 		 	<button class = "btn btn-success vermas" type="submit" value="Enviar">REGISTRARME</button>
				</div>
		 <br>
		 <br>
	 </fieldset>
 		</form>
	 </header>
	 <!--//////////////<CONTENIDO>///////////////-->

	 <!--//////////////</FOOTER>///////////////-->
		 <div class="container-fluid footer">
					 <footer>
						 <p class="text-center">&copy; Copyright 2017  Andres Barrios - Brian Kavinoff - Javier Portela</p>
					 </footer>
		 </div>
	 </div>
	 <!--//////////////</FOOTER>///////////////-->

</div>

	</body>
</html>
