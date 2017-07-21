<nav class="navbar"><!--   navbar-inverse  -->
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Integrador DH</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="faq.php">F.A.Q.</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_COOKIE["nombreUsuario"])){
                        echo ('<li><a href="#">'."Usuario: ".$_COOKIE["nombreUsuario"].'</a></li>');
                        echo ('<li><a href="logout.php?logout=1">LOG OUT</a></li>');
                    }else{
                        echo ('<li><a href="registro.php">Registrarse</a></li>
                            <li><a href="ingresar.php">Ingresá</a></li>');
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
