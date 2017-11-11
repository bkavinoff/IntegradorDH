<?php
Class Validate{
    use DBMySql;

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
        return (!empty($nombreDeUsuario) &&
            strlen($nombreDeUsuario) > 3);
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

    function existeMailEnDB($correo){
        try{
            //obtengo la conexion a la DB
            //$db=conectarDB();
            $base=new DBMySql();

            //preparo la sentencia SQL
            $query=$base->db->prepare("SELECT id FROM usuarios WHERE mail='". $correo . "'");
            echo "sql: <br/>";
            var_dump($query);

            //ejecuto la query
            $query->execute();
            $coincidencias=$query->rowCount();
            echo "Coincidencias: <br/>";
            var_dump($coincidencias);
            //echo 'count: '.count($result) . '<br/>';
            $base->db=null;
            if ($coincidencias>0){
                return true;
            }else {
                return false;
            }
        }catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
    }

    function existeUsuarioEnDB($usuario){
        try{
            //echo "<pre>";
            //obtengo la conexion a la DB
            //$db=conectarDB();
            $base=new DBMySql();
            //preparo la sentencia SQL
            $query=$base->db->prepare("SELECT id FROM usuarios WHERE usuario='". $usuario . "'");
            echo "sql: <br/>";
            var_dump($query);

            //ejecuto la query
            $query->execute();
            $coincidencias=$query->rowCount();
            echo "Coincidencias: <br/>";
            var_dump($coincidencias);
            //echo 'count: '.count($result) . '<br/>';
            $base->db=null;
            if ($coincidencias>0){
                return true;
            }else {
                return false;
            }
        }catch(PDOException $Exception){
            echo $Exception->getMessage();
            return false;
        }
    }
}
?>
