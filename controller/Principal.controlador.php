<?php

    class Principalcontrolador extends Controlador{
        public function __construct()
        {
            //Llamamos al constructor del controlador de APP
            parent:: __construct();
            /**echo "Controlador Principal Funcionando";
            //llamamos la vista que se va a cargar, en este caso en la carpeta principal/lista.php
            $this->vista->mostrar("principal/lista.php"); **/
        }
        public function inicio(){
                $this->vista->mostrar("principal/index");                
        }
    }