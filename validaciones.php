<?php
    function validarNombreOApellido($nombreOApellido, $longitudMinima)
    {

        $nombreOApellido = trim($nombreOApellido);
        return ! empty($nombreOApellido) &&
            ctype_alpha($nombreOApellido) &&
            strlen($nombreOApellido) > $longitudMinima;
    }

    function validarEmail($correo)
    {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    function validarNombreDeUsuario($nombreDeUsuario)
    {
        $nombreDeUsuario = trim($nombreDeUsuario);
        return !empty($nombreDeUsuario) &&
            strlen($nombreDeUsuario) > 7;
    }

    function validarPassword($password)
    {
        $password = trim($password);
        return !empty($password) &&
            strlen($password) > 7;
    }

    function verificarUserDeslogueado(){
        //si está deslogueado, la cookie no va a existir
        if (!isset($_COOKIE["nombreUsuario"])){
            header('Location: ingresar.php');
        }
    }

    function verificarUserLogueado(){
        //si está deslogueado, la cookie va a existir
        if (isset($_COOKIE["nombreUsuario"])){
            header('Location: index.php');
        }
    }
?>
