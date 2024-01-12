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
        $avisVehicule = new AvisVehiculeModel();


        if(isset($_SESSION['user-authenticated'])){
            $session = $_SESSION;
            if(array_key_exists("avisVehiculeButton",$_POST)){
                $avisVehicule->insert($_POST);
                $vehicule = $vehicules->get($_POST['vehicule_id']);
                $vehicule['note'] = $avisVehicule->calculateNote($_POST['vehicule_id']);
                $vehicules->update($vehicule);
            }
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
        $vehiculeInfos = new VehiculeInfosView();
        $comparator = new ComparatorView();
        $table = new CompareTableView();



        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $vehiculeData = ["vehicule" => $vehicules->get($id[1]), "images" => $images->getVehiculeImages($id[1]), "avis" => $avisVehicule->getAllWithUsernamesForVehicule($id[1]),"session" => $session];
        $compareData = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare(), "specificVehicule" => $vehicules->get($id[1]), "specificMarque" => $marques->get($vehicules->get($id[1])["marque_id"])];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $vehiculeInfos->show($vehiculeData);
        $comparator->show($compareData);
        $bottom->show(null);
        $footer->show(null);
    }
}