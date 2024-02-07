<?php
class usuariosModelo
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->getConnection();
    }

    public function getAllUsuarios() //metodo para traer todos los usurios
    {
        $sql = "SELECT *
                FROM usuarios";
        
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validateUser($correo, $password) // Metodo para validar usuario
    {
        $sql = "SELECT * 
                    FROM usuarios 
                    WHERE usuario = '$correo' 
                    AND password = '$password'";
        
        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertarUsuario($nombre, $apellido, $correo, $password, $confirmar_password)  // Metodo para insertar un nuevo registro en tabla usuarios
    {
        $sql = "INSERT 
                    INTO usuarios
                    VALUES (null, '$nombre', '$apellido', '$correo', '$password', '$confirmar_password')";

        print_r($sql);
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function getUserByEmail($correo) // Metodo para traer registro de tabla cajas por id
    {
        $sql = "SELECT * 
                    FROM usuarios
                    WHERE 'correo' = $correo";

        $result = $this->conexion->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}