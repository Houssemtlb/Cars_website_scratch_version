<?php

class APP
{

    private $controller = 'Home';
    private $method = 'loadPage';

    private function splitURL()
    {
        $URL = $_GET["url"] ?? 'Home';
        $URL = explode("/", $URL);
        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitURL();

        $filename = "../app/Controllers/" . ucfirst($URL[0]) . "Controller.php";

        if (file_exists($filename)) {
            require($filename);
            $this->controller = ucfirst($URL[0]) . "Controller";
        } else {
            require("../app/Controllers/Error404Controller.php");
            $this->controller = 'Error404Controller';
        }

        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
}
