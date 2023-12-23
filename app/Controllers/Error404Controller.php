<?php

class Error404Controller extends Controller
{
    public function index()
    {
        echo "this error 404 page";
    }
    public function loadPage()
    {
        parent::loadComponent('Error404.view.php');
    }
}
