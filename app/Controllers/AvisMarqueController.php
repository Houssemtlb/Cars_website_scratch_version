<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/MarquesView.php");
require_once("../app/Views/MarqueSpecifiqueView.php");


//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");
require_once ("../app/Models/AvisMarqueModel.php");
require_once ("../app/Models/AvisVehiculeModel.php");



class AvisMarqueController extends Controller{
    public function loadPage($id)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $avisMarque = new AvisMarqueModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $marquesView = new MarquesView();
        $marqueSpecifiqueView = new MarqueSpecifiqueView();

        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $marquesData = ["size" => "big", "marques" => $marques->getAllWithImages(),"link" => "avis"];


        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);
        if(!empty($id[1])){
            $marqueSpecifiqueData =["marque" => $marques->get($id[1]),
                                    "logo" => $images->getMarqueLogo($id[1]) ,
                                    "vehicules" => $vehicules->getAllForMarque($id[1]),
                                    "images" => $images->getMarqueAllVehiculeImages($id[1]),
                                    "avis" => $avisMarque->getAllWithUsernamesForMarque($id[1]),
                                    "link" => "avis"];
            $marqueSpecifiqueView->show($marqueSpecifiqueData);
        }else{
            $marquesView->show($marquesData);
        }
        $bottom->show(null);
        $footer->show(null);
    }
}