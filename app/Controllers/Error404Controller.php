<?php
require_once("../app/Views/Error404View.php");
class Error404Controller extends Controller
{
    public function loadPage($data)
    {
        $errorView = new Error404View();
        $errorView->show(null);
    }
}
