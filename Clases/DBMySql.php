<?php
    public class DBMySql implements iDB{
        public $db;
        public $dsn;
        public $db_user;
        public $db_password;
        use Usuario;

        public function __construct(){
            try{
                $this->dsn='mysql:host=localhost;dbname=shamlarec_db;charset=utf8mb4;port:3306';
                $this->db_user='root';
                $this->db_password='';
                $this->db=new PDO($dsn, $db_user);
            }catch(PDOException $Exception){
                echo $Exception->getMessage();
            }
        }
        public function guardarUsuario($usuario){
            Usuario->guardarUsuario($usuario);
        }
        public function traerPorMail($mail){
            parent::traerPorMail($mail);
        }
        public function traerTodos(){
            parent::traerTodos();
        }

    }
        //function conectarDB(){
        //    $db;
        //    try{
        //        $dsn='mysql:host=localhost;dbname=shamlarec_db;charset=utf8mb4;port:3306';
        //        $db_user='root';
        //        $db_password='';

        //        $db=new PDO($dsn, $db_user);
        //        //var_dump($db);
        //    }catch(PDOException $Exception){
        //        echo $Exception->getMessage();
        //    }
        //return $db;

 ?>
