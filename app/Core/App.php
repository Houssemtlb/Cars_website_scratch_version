<?php

class APP{

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
        } else {
            require("../app/Controllers/Error404Controller.php");
        }
    }
}
