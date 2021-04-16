<?php

    require "dbConfig.php";

    public class conexion(){
        private $Ip;
        private $NombreDeDB;
        private $NombreDeUsuario;
        private $PasswordDeUsuario;

        public function conectar(){
            $this->Ip = IP;
            $this->NombreDeDB = DB;
            ...
        }
    }