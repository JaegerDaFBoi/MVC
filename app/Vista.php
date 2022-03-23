<?php
    class Vista{
        public function __construct()
        {
            
        }
        //Creamos el metodo que me recorte la URL de la vista.
        public function mostrar($rutaArchivo){
            require_once 'view/plantilla/cabeza.php';
            require_once 'view/plantilla/menu.php';
            require_once 'view/' .$rutaArchivo . ".php";
            require_once 'view/plantilla/pie.php';
            //require_once 'view/' . $rutaArchivo;
        }
    }