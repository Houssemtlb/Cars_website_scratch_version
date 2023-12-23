<?php

class HomeController extends Controller
{
    public function index()
    {
        echo "this is home page";
    }

    public function loadPage()
    {
        parent::loadComponent('Header');
    }
}
