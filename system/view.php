<?php
    class View
    {
        public static function render($params = [])
        {
            $d = json_decode(json_encode($params));

            if (!is_dir(VIEWS)) {
                showError("El directorio de vista no existe", true);
            }
            $filename = VIEWS . $params["view"] . ".php";
            // print_r($filename);
            if (!is_file($filename)) {
                // die("La vista no existe");
                showError("La vista no existe", true);
            }
            require_once $filename;
        }
    }
