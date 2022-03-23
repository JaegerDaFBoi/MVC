<?php
    class App{
        public function __construct(){
            $url = $_GET['url'] ?? ""; //Si llega vacio se manda un espacio.
            $url = rtrim($url, "/"); // recorre la cadena y le borra los "/" 
            $url = explode('/',$url); //Se separa la cadena ejm Usuario/crear => [Usuario, crear]

            //cargamos el controlador por defecto de la vista que queremos que aparezca.
            if(empty($url[0])){
                require_once 'controller/Principal.controlador.php';
                $principal = new Principalcontrolador();
                $principal -> inicio();
                return;
            }
            //convertimos la pimera letra en mayuscula en caso de que venga en minuscula.
                $rutaArchivoControlador = "controller/" .ucfirst($url[0]) . ".controlador.php"; //En la posicion 0 es nombre del controlador.
                if(!file_exists($rutaArchivoControlador)){
                    die ("Error, no existe el controlador");
                }
                require $rutaArchivoControlador;
                $nombreControlador = ucfirst($url[0]). "Controlador";
                $controlador = new $nombreControlador;

                if(count($url)==1){
                    $controlador->inicio();
                }
                if(count($url)==2){
                    if(!method_exists($controlador, $url[1])){
                        die("Error, el metodo no existe");
                    }
                    $controlador->{$url[1]}();
                }

            /**require_once './controller/Principal.controlador.php';
            $principal = new PrincipalControlador();
            require_once './controller/Persona.controlador.php';
            $persona = new PersonaControlador(); **/
        }
    }