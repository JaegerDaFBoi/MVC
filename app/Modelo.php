<?php
//El modelo interactua con la base de datos, se encarga de llevar las consultas e informacion ya lista para el consumo.
    class Modelo extends Conexion{
        public function __construct()
        {
            //tenemos que llamar al constructor de la clase conexion. Así:
            parent:: __construct();
        }
    }