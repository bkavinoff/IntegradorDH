<?php
    require "validaciones.php";
    verificarUserDeslogueado();
    //borro COOKIE en caso de solicitarlo
    if (isset($_GET['logout'])){
        if ($_GET['logout']==1){
            //fuerzo a que la cookie esté vencida
            setcookie('nombreUsuario',$_REQUEST['username'],time()-1);//2 min
		          setcookie('passwordUsuario',$_REQUEST['password'],time()-1);//2 min
            //redirecciono al Index
            header('Location: index.php');
        }
    }
 ?>
