<?php
class AdminApp
{

    private $controller = 'AdminAuthController';
    private $method = 'loadPage';

    private function splitURL()
    {
        $URL = $_GET["url"] ?? 'AdminAuth';
        $URL = explode("/", $URL);
        return $URL;
    }

    public function loadController()
    {
        if(isset($_POST['username']) && isset($_POST['password'])){
            if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
                $_SESSION["admin-authenticated"] = 'true';
            }
        }

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
            call_user_func_array([$controller, $this->method], [$this->splitURL()]);
    }
}