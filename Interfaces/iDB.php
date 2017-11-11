<?php
    interface iDB{
        public function guardarUsuario($usuario);
        public function traerPorMail($mail);
        public function traerTodos();
    }
?>
