<!DOCTYPE html>
<html>
	<head>
    <title>REGISTRACION</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>

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

		<!--//////////////<CONTENIDO>///////////////-->
		<div class="container">
      <div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="main-header">
						<div class="jumbotron text-center">
					<h1>REGISTRACIÓN</h1>
					<p class = "parrafo">Por favor ingresa los siguientes datos para registrarte. Todos los campos son obligatorios.</p>
				</div>
			</div>
				</div>
			</div>

		<header class ="fondoregistracion">
		<form action="script.php" method="post">
			<br>
			<div class="container2">
	      <div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
		      	<label class= "cuadro" for="Nombre"> Nombre: </label>
		        	<input type="text" name="nombre usuario" required>
					</div>
				 <div class="col-lg-1 col-md-1 col-xs-1">
					 <p class = "espacio"></p>
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
						<label class= "cuadro" for="Contraseña"> Contraseña: </label>
							<input type="password" name="Contraseña" required>
					</div>
	  		</div>
			</div>
		    <br>

				<div class="container2">
		      <div class="row">
						<div class="col-lg-5 col-md-5 col-xs-5">
				 			<label class= "cuadro" for="Apellido"> Apellido: </label>
					 			<input type="text" name="apellido usuario" required>
				 		</div>
					<div class="col-lg-1 col-md-1 col-xs-1">
						<p class = "espacio"></p>
					</div>
	 					<div class="col-lg-5 col-md-5 col-xs-5">
	 						<label class= "cuadro" for="Direccion"> Dirección: </label>
	 							<input type="Direccion" name="Direccion" required>
	 							<br>
	 								<div class = "comentario">calle, número, piso, departamento</div>
	 					</div>
			 		</div>
				</div>
			 <br>

			 <div class="container2">
 	      <div class="row">
 					<div class="col-lg-5 col-md-5 col-xs-5">
						<label class= "cuadro" for="DNI"> DNI: </label>
							<input type="textr" name="DNI" required size="8" maxlength="8">
							<br>
								<div class = "comentario">Solo números</div>
					</div>
					<div class="col-lg-1 col-md-1 col-xs-1">
						<p class = "espacio"></p>
					</div>
				 	<div class="col-lg-5 col-md-5 col-xs-5">
			      <label class= "cuadro">Provincia: </label>
			        <select name="asuntos" required>
								<option value="" selected="" disabled="">Seleccionar</option>
			          <option value="">--CABA</option>
								<option value="">--Gran Buenos Aires</option>
								<option value="">Buenos Aires</option>
			          <option value="">Cordoba</option>
								<option value="">La Pampa</option>
								<option value="">Tierra dek Fuego</option>
								<option value="">Santa Cruz</option>
								<option value="">Neuquen</option>
								<option value="">Tucuman</option>
								<option value="">Mendoza</option>
								<option value="">Entre Rios</option>
								<option value="">Formosa</option>
								<option value="">Misiones</option>
								<option value="">Corrientes</option>
								<option value="">Salta</option>
								<option value="">Jujuy</option>
								<option value="">Santa Fe</option>
								<option value="">Chaco</option>
								<option value="">Rio Negro</option>
								<option value="">Chubut</option>
								<option value="">Catamarca</option>
								<option value="">San Luis</option>
								<option value="">Santiago del Estero</option>
								<option value="">San Juan</option>
								<option value="">La Rioja</option>
								<option value="">Formosa</option>
			        </select>
						</div>
					</div>
			</div>
			<br>

			<div class="container2">
	      <div class="row">
					<div class="col-lg-5 col-md-5 col-xs-5">
			 			<label class= "cuadro" for="Telefono"> Teléfono: </label>
				 			<input type="textr" name="Telefono" required >
				 			<br>
				 				<div class = "comentario">Solo números y guiones</div>
			 		</div>
					<div class="col-lg-1 col-md-1 col-xs-1">
						<p class = "espacio"></p>
					</div>
					 <div class="col-lg-5 col-md-5 col-xs-5">
			 		 	<label class= "cuadro" for="Localidad"> Localidad: </label>
				 			<input type="Localidad" name="Localidad" required>
			 		</div>
		 		</div>
		 	</div>
		 	<br>

		 <div class="container2">
			 <div class="row">
				 <div class="col-lg-5 col-md-5 col-xs-5">
		      	<label class= "cuadro" for="E-mail"> E-mail: </label>
		        	<input type="email" name="correo" required>
					</div>
					<div class="col-lg-1 col-md-1 col-xs-1">
						<p class = "espacio"></p>
					</div>
					<div class="col-lg-5 col-md-5 col-xs-5">
						<label class= "cuadro" for="Codigo Postal"> CP: </label>
							<input type="Codigo Postal" name="Codigo Postal" required>
					</div>
				</div>
		</div>
		 <br>
	   <br>
		 <div class="container2">
			 <div class="row">
			 	<div class="col-lg-10 col-md-10 col-xs-10">
					<p class = "espacio"></p>
				</div>
				 <div class="col-lg-2 col-md-2 col-xs-2">
		 		 	<button class = "btn btn-success vermas" type="button">REGISTRARME</button>
				</div>
			</div>
		</div>
		 <br>
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

	</body>
</html>
