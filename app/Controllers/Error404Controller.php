<?php

class Error404Controller extends Controller
{
    public function loadPage()
    {
        parent::loadComponent('Error404.view.php');
    }
}
