<?php

class Controller
{
    protected function loadComponent($component)
    {

        $filename = "../app/Views/" . $component . ".view.php";

        if (file_exists($filename)) {
            require($filename);
        } else {
            require("../app/Views/Error404.view.php");
        }
    }
}
