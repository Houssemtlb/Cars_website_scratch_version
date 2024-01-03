<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/VehiculeInfosView.php");



//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");



class VehiculeController extends Controller{
    public function loadPage($id)
    {

        //models declaration area
        $vehicules = new VehiculeModel();
        $images = new ImageModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $vehiculeInfos = new VehiculeInfosView();



        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $vehiculeData = ["vehicule" => $vehicules->get($id[1]), "images" => $images->getVehiculeImages($id[1])];



        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);
        $vehiculeInfos->show($vehiculeData);
        $bottom->show(null);
        $footer->show(null);
    }
}