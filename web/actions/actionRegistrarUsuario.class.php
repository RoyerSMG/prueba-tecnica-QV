<?php
class actionRegistrarUsuario
{
    public function execute($params)
    {
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarUsuario($nombre, $apellido, $correo, $password, $confirmar_password);
        print_r($_REQUEST);

        $confirmar_password = $_POST["confirmar_password"];
        print_r($nombre);

        switch ($result) {
            case 0:
                $response = [
                    "result" => "Fail",
                    "data" => "",
                    "message" => "Faltan Datos",
                    "view" => "inicio"
                ];
                break;

            case 1:
                $response = [
                    "result" => "Fail",
                    "data" => "",
                    "message" => "Ya Existe Un Registro Con El Mismo Email",
                    "view" => "inicio"
                ];
                break;

            case 2:
                $response = [
                    "result" => "Fail",
                    "data" => "",
                    "message" => "Registro No Creado",
                    "view" => "inicio"
                ];
                break;

            case 3:
                $response = [
                    "result" => "Success",
                    "data" => "",
                    "message" => "Registro Creado Satisfactoriamente",
                    "view" => "formacionNet"
                ];
                break;
        }
        return $response;
    }
}