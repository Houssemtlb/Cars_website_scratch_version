<?php

//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/UserViews/TopBarView.php");
require_once("../app/Views/UserViews/MenuBarView.php");
require_once("../app/Views/UserViews/FooterView.php");
require_once("../app/Views/UserViews/MarquesView.php");
require_once("../app/Views/UserViews/MarqueSpecifiqueView.php");
require_once("../app/Views/UserViews/AvisVehiculeView.php");

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


        if(isset($_SESSION['user-authenticated'])){
            $session = $_SESSION;
            if(array_key_exists("LikeButton",$_POST)){
                $avis = $avisVehicule->get($_POST['avis_vehicule_id']);
                $avis['appreciation'] = $avis['appreciation'] + 1;
                $avisVehicule->update($avis);
            }
        }else{
            $session = null;
        }


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
            "avis" => $avisVehicule->avisLesPlusApprecies($id[1]),
            "session" => $session];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $avisVehiculeView->show($avisVehiculeData);
        $bottom->show(null);
        $footer->show(null);
    }
}