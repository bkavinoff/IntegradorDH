<?php   session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <?php require "cabecera.php";?>
        <title>TP Integrador</title>
    </head>
    <body>
        <div class="container">
            <!--//////////////<MENU SUPERIOR>///////////////-->
            <?php require "navbar.php";?>
            <!--//////////////</MENU SUPERIOR>///////////////-->
            <!--//////////////<CONTENIDO>///////////////-->
            <div class="main-header">
                <div class="jumbotron text-center">
                    <h1>Bienvenidos</h1>
                    <p>Acá va a ir una pequeña descripcion de la página...</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 fondo-azul producto">
                        <img src="images/Iphone.png" alt="Iphone" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                    <div class="col-sm-4 fondo-rojo producto">
                        <img src="images/SmartphonesAndroid.png" alt="SmartphonesAndroid" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                    <div class="col-sm-4 fondo-verde producto">
                        <img src="images/Tablet.png" alt="Tablet" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 fondo-azul producto">
                        <img src="images/PC.png" alt="PC" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                    <div class="col-sm-4 fondo-rojo producto">
                        <img src="images/Notebook.png" alt="Notebook" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                    <div class="col-sm-4 fondo-verde producto">
                        <img src="images/Presupuestos.png" alt="Presupuestos" class="imgProducto">
            				    <h2 class="tituloProducto">Producto</h2>
            				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
            				    <button type="button" class="btn btn-success vermas">Ver Mas</button>
                    </div>
                </div>
            </div>
            <!--//////////////</CONTENIDO>///////////////-->
      </div>
      <!--//////////////</FOOTER>///////////////-->
      <?php require "footer.php";?>
      <!--//////////////</FOOTER>///////////////-->
    </body>
</html>
