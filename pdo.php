<?php
    function conectarDB(){
        $db;
        try{
            $dsn='mysql:host=localhost;dbname=shamlarec_db;charset=utf8mb4;port:3306';
            $db_user='root';
            $db_password='';

            $db=new PDO($dsn, $db_user);
            //var_dump($db);
        }catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
        return $db;
    }
 ?>
