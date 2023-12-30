<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/ComparatorView.php");

//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");


class CompareController extends Controller{
    public function loadPage($data)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicule = new VehiculeModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $section2 = new ComparatorView();

        //binding area
        unset($data[0]); //to eliminate le nom du controlleur
        $section2Data = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare()];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);
        $section2->show($section2Data);
        $bottom->show(null);
        $footer->show(null);
    }
}