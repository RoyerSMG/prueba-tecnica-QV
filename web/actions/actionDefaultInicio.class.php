<?php
class actionDefaultInicio
{
    public function execute()
    {
        session_destroy();
        $response = [
            "result" => "Success",
            "data" => "",
            // "message" => "",
            "view" => "inicio"
        ];
        return $response;
    }
}