<?php

class usuariosControl
{
    var $modelo;
    function __construct()
    {
        $this->modelo = new usuariosModelo();
    }

    public function autenticar($correo, $password) // Metodo para autenticar usuario al estar en el login
    {
        if 
        (
            !empty($correo) && $correo != "" && $correo != NULL &&     //Se valida que ninguno de los 2 campos este vacio
            !empty($password) && $password != "" && $password != NULL
        ) 
        {
            $result = $this->modelo->validateUser($correo, $password);
            if (is_array($result) && count($result) > 0 && $password == $result[0]['password'] && $correo == $result[0]['correo'] ) 
            {
                return $result; //usuario valido
            } 
            else 
            {
                return 0; // Usuario Invalido
            }
        } 
        else 
        {
            return 0; // Faltan Datos
        }
    }

    public function registrarUsuario($nombre, $apellido, $correo, $password, $confirmar_password)  // Metodo Para Registrar cajas
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != Null && 
            !empty($apellido) && $apellido != "" && $apellido != Null &&  
            !empty($correo) && $correo != "" && $correo != Null &&
            !empty($password) && $password != "" && $password != Null &&
            !empty($confirmar_password) && $confirmar_password != "" && $confirmar_password != Null    
            ) {
            
                $result = $this->modelo->insertarUsuario($nombre, $apellido, $correo, $password, $confirmar_password);
                if ($result == TRUE) {
                    return 3;  // usuario creado
                } else {
                    return 2; // usuario no creado
                }
        } else {
            return 0; // faltan datos
        } 
    }
}