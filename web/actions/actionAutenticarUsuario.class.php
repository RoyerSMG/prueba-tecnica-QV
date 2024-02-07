<?php
class actionAutenticarUsuario
{
    public function execute($params)
    {
        extract($_REQUEST);
        $u = new usuariosControl();

        $result = $u->autenticar($usuario, $password);

        if ($result)
        {
            $response = [
                "result" => "Success",
                "data" => $result,
                "message" => "Usuario Valido",
                "view" => "inicio"
            ];

            $_SESSION["usuario"] = $result[0];
        }

        if ($result == 0) {
            $response = [
                "result" => "Fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view" => "login"
            ];
        }
        if ($result == 1) {
            $response = [
                "result" => "Fail",
                "data" => "",
                "message" => "Usuario o Contraseña Invalidos",
                "view" => "login"
            ];
        }
        
        return $response;
    }
}