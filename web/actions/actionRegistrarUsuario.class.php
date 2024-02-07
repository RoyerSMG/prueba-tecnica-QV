<?php
class actionRegistrarUsuario
{
    public function execute($params)
    {
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarUsuario($nombre, $apellido, $correo, $password, $confirmar_password);

        $confirmar_password = $_POST["confirmar_password"];

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
                    "message" => "Registro No Creado",
                    "view" => "inicio"
                ];
                break;

            case 2:
                $response = [
                    "result" => "Success",
                    "data" => "",
                    "message" => "Registro Creado Satisfactoriamente",
                    "view" => "inicio"
                ];
                break;
        }
        return $response;
    }
}