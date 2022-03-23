<?php
    class Conexion{
        protected $conexion;
        public function __construct()
        {
            try{
                $driver = DB_TIPO .":host=" . DB_SERVER . ";DB_NAME=" . DB_NAME;
                $opciones = [
                    //lOS ERRORES LOS VUELVE EN ADVERTENCIAS.
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ];
                $this->conexion = new PDO($driver,DB_USER,DB_PASSWORD,$opciones);
            }catch(PDOException $pdoException){
                die("❌ Error [Error DB]: ".$pdoException->getMessage());
            }
        }
    }