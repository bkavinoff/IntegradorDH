<?php
    class Usuario{
        use DB;
        use DBMySql;
        use Validate;

        public $id;
        public $nombreCompleto;
        public $mail;
        public $username;
        public $password;
        public $foto;
        public $avatar;

        public function __construct($id, $nombreCompleto, $mail, $username, $password, $foto, $avatar){
            $this->id = $id;
            $this->nombreCompleto = $nombreCompleto;
            $this->mail = $mail;
            $this->username = $username;
            $this->password = $password;
            $this->foto=$foto; //imagen del avatar
            $this->avatar = $avatar; //ruta del avatar
        }

        function guardarUsuario()
        {
            // Validamos que los datos ingresados sean válidos y no exista en la db
            //$errores = validarUsuario($usuario);
            $errores = $this->validarUsuario();

            //si no hay errores, los datos estan correctos, y el usuario no existe en la db, procedemos a crearlo
            if (empty($errores)) {
                // No hubo errores
                $this->password = sha1($this->password);
                //$usuario->avatar=encriptarFoto($usuario->foto);
                $this->avatar=$this->encriptarFoto($this->foto);
                //$usuarioCreado=crearUsuarioDB($nombre, $apellido, $correo, $usuario, $password, encriptarFoto($foto));
                //$usuarioCreado=crearUsuarioDB($usuario);
                $usuarioCreado=$this->crearUsuarioDB();
                if ($usuarioCreado==true){
                    //subirFoto($usuario->foto);
                    $this->subirFoto();
                }
            } else {
                // Hubo errores, entonces los devuelvo a la página
                return $errores;
            }
        }

        function crearUsuarioDB($usuario)
        {
            try {
                //obtengo la conexion a la DB
                //$db=conectarDB();
                $base=new DBMySql();

                //preparo la sentencia SQL
                $query = $base->db->prepare("
                INSERT INTO usuarios
                (nombre, apellido, mail, usuario, password, avatar)
                VALUES
                (:nombre, :apellido, :mail, :usuario, :password, :avatar)
                ");
                //realizo el bind de los valores
                $query->bindValue(':nombre', $usuario->nombre, PDO::PARAM_STR);
                $query->bindValue(':apellido', $usuario->apellido, PDO::PARAM_STR);
                $query->bindValue(':mail', $usuario->correo, PDO::PARAM_STR);
                $query->bindValue(':usuario', $usuario->usuario, PDO::PARAM_STR);
                $query->bindValue(':password', $usuario->password, PDO::PARAM_STR);
                $query->bindValue(':avatar', $usuario->avatar, PDO::PARAM_STR);

                //ejecuto la query
                $query->execute();
                $base->db=null;
                return true;
            } catch(PDOException $Exception){
                echo $Exception->getMessage();
                return false;
            }
        }

        function validarUsuario()
        {
            $valido=new Validate();
            $errores = [];
            if (! $valido->validarNombreOApellido($this->nombre, 1)) {
                $errores['nombre'] = "El nombre es invalido";
            }
            if (! $valido->validarNombreOApellido($this->apellido, 2)) {
                $errores['apellido'] = "El apellido no es valido";
            }
            if (! $valido->validarEmail($this->correo)) {
                $errores['correo'] = "El mail ingresado no es valido";
            }
            if (! $valido->validarNombreDeUsuario($this->usuario)) {
                $errores['username'] = "El username ingresado no es valido";
            }
            if (! $valido->validarPassword($this->password)) {
                $errores['password'] = "El password ingresado no es valido";
            }

            //verificamos que si existe el mail y el usuario en la db
            if ($valido->existeMailEnDB($this->correo)==true) {
                $errores['correo'] = "El mail ingresado ya se encuentra registrado.";
            }
            if ($valido->existeUsuarioEnDB($this->usuario)==true) {
                //subirFoto($foto);
                $errores['username'] = "El usuario ingresado ya se encuentra registrado.";
            }

            return $errores;
        }

        function encriptarFoto(){
            if ($this->foto=null){
                return null;
            }
            if (count($this->foto)) {
                $avatarFileName = $this->foto['name'];
                $avatarExtension = pathinfo($avatarFileName, PATHINFO_EXTENSION);
                return md5($avatarFileName) . '.' . $avatarExtension;
            }
        }

        function subirFoto()
        {
            if (count($this->foto)) {
                $avatarFile = $this->foto['tmp_name'];
                $resultado = move_uploaded_file($avatarFile, 'avatars/' . encriptarFoto($this->foto));
            }
            return $resultado;
        }

        function buscarUsuario($username)
        {
            $fp = fopen('users.json', 'r');
            while ($linea = fgets($fp)) {
                if (!empty($linea)) {
                    $linea = json_decode($linea, true);
                    if ($linea['user'] == $username) {
                        return $linea;
                    }
                }
            }
            return false;
        }
    }
?>
