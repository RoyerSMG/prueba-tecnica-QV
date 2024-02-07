<?php
class actionDefaultLogin
{
    public function execute()
    {
        $response = [
            "result" => "Success",
            "data" => "",
            // "message" => "",
            "view" => "login"
        ];
        return $response;
    }
}