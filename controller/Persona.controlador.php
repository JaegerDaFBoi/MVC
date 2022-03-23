<?php

    class Personacontrolador extends Controlador{
        public function __construct()
        {
            //Llamamos al constructor del controlador de APP
            parent:: __construct();
            //llamamos la vista que se va a cargar, en este caso en la carpeta Persona/Persona.php
            $this->vista->mostrar("Persona/Persona.php");
        }
    }
