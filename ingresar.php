<!DOCTYPE html>
<html>
	<head>
    <title>INGRESAR</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
    <div class="container">
      <div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="main-header">
						<div class="jumbotron text-center">
		        <h1>ACCEDER</h1>
						<div class="parrafo">Escribe tu e-mail y contraseña para ingresar.</div>
					</div>
				</div>
        </div>
        </div>
    <br>

			<header class ="fondoregistracion">
  		<form action="script.php" method="post">
			<br>
      <div class="container2">
          <div class="row">
		      <div class="col-lg-4 col-md-4 col-xs-4">
		      <label class= "cuadro" for="E-mail"></label>
		        <input type="email" placeholder="Ingresa tu E-mail"name="correo" required>
          </div>
          </div>
        <br>


          <div class="container3">
              <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-4">
				<label class= "cuadro"   for="Contraseña"> </label>
					<input type="Contraseña" placeholder="Ingresa tu contraseña"name="Contraseña" required>
        </div>
        </div>
			 <br>
		   <br>
		    <button type="button" class = "btn btn-success vermas">INGRESAR</button>
		    <br>
		    <br>
        <br>
				</header>

				<div class="container-fluid footer">
				<footer>
        <div class="container4">
   			 <div class="row">
   				 <div class="col-lg-10 col-md-10 col-xs-10">
    		   		<p class = "espacio"></p>
    				</div>
   			 	<div class="col-lg-2 col-md-2 col-xs-2">
   		   		<a class = "volver" href="index.php" target="INICIO">VOLVER </a>
   				</div>
   			</div>
   		</div>
		</footer>
		</form>






		<?php

		?>

	</body>
</html>
