<?php

class Usuario extends Modelo
{
    public $cedula;
    public $nombre;
    public $correo;
    public $contrasena;

    public function __construct($cedula,$nombre,$correo,$contrasena)
    {
        parent:: __construct();
        $this->cedula=$cedula;
        $this->nombre=$nombre;
        $this->correo=$correo;
        $this->contrasena=$contrasena;   
    }

    public function guardar()
    {
        try {
            $query="INSERT INTO usuarios (cedula,nombre,correo,contrasena) VALUES (:cedula,:nombre,:correo,:contrasena)";
            $consulta=$this->conexion->prepare($query);
            $consulta->execute([":cedula"=>$this->cedula, ":nombre"=>$this->nombre, ":correo"=>$this->correo, ":contrasena"=>$this->contrasena]);
        } catch (PDOException $e) {
            die("Error al guardar el usuario: ". $e->getMessage());
        }
    }

    public function listarTodos()
    {
        try {
            $query="SELECT * FROM usuarios";
            $data=$this->conexion->query($query,PDO::FETCH_ASSOC);
            $usuarios=[];
            foreach ($data as $row) {
                $usuario = new Usuario($row['cedula'],$row['nombre'], $row['correo'], $row['contrasena']);
                array_push($usuarios,$usuario);
            }
            return $usuarios;
        } catch (PDOException $e) {
            die("Error, no se pueden listar los usuarios: ". $e->getMessage());
        }
    }
}