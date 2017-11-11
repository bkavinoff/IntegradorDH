<?php
    require_once "validaciones.php";
    require_once "Clases\Usuario.php";  
    function guardarUsuario($nombre, $correo, $usuario, $password, $foto){
        $usuario=new Usuario($nombre, $correo, $usuario, $password, $foto, null);
        $usuario->guardarUsuario($usuario);
    }
 ?>
