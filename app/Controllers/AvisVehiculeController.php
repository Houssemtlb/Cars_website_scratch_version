<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/MarquesView.php");
require_once("../app/Views/MarqueSpecifiqueView.php");
require_once("../app/Views/AvisVehiculeView.php");

//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");
require_once ("../app/Models/AvisMarqueModel.php");
require_once ("../app/Models/AvisVehiculeModel.php");



class AvisVehiculeController extends Controller{
    public function loadPage($id)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $avisVehicule = new AvisVehiculeModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $avisVehiculeView = new AvisVehiculeView();

        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $avisVehiculeData =[
            "vehicule" => $vehicules->get($id[1]),
            "images" => $images->getVehiculeImages($id[1]),
            "avis" => $avisVehicule->getAllWithUsernamesForVehicule($id[1])];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);
        $avisVehiculeView->show($avisVehiculeData);
        $bottom->show(null);
        $footer->show(null);
    }
}