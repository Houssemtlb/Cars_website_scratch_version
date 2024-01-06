<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/VehiculeInfosView.php");
require_once("../app/Views/ComparatorView.php");
require_once("../app/Views/CompareTableView.php");


//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");
require_once ("../app/Models/AvisVehiculeModel.php");



class VehiculeController extends Controller{
    public function loadPage($id)
    {

        //models declaration area
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $marques = new MarqueModel();
        $avis = new AvisVehiculeModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $vehiculeInfos = new VehiculeInfosView();
        $comparator = new ComparatorView();
        $table = new CompareTableView();



        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $vehiculeData = ["vehicule" => $vehicules->get($id[1]), "images" => $images->getVehiculeImages($id[1]), "avis" => $avis->getAllWithUsernamesForVehicule($id[1])];
        $compareData = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare(), "specificVehicule" => $vehicules->get($id[1]), "specificMarque" => $marques->get($vehicules->get($id[1])["marque_id"])];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);
        $vehiculeInfos->show($vehiculeData);
        $comparator->show($compareData);
        $bottom->show(null);
        $footer->show(null);
    }
}