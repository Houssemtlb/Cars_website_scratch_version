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


class MarqueController extends Controller{
    public function loadPage($id)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $avisMarque = new AvisMarqueModel();


        if(isset($_SESSION['user-authenticated'])){
            $session = $_SESSION;
            if(array_key_exists("avisMarqueButton",$_POST)){
                $avisMarque->insert($_POST);
                $marque = $marques->get($_POST['marque_id']);
                $marque['note'] = $avisMarque->calculateNote($_POST['marque_id']);
                $marques->update($marque);
            }
            if(array_key_exists("LikeButton",$_POST)){
                $avis = $avisMarque->get($_POST['avis_marque_id']);
                $avis['appreciation'] = $avis['appreciation'] + 1;
                $avisMarque->update($avis);
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
        $marquesView = new MarquesView();
        $marqueSpecifiqueView = new MarqueSpecifiqueView();

        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $marquesData = ["size" => "big", "marques" => $marques->getAllWithImages()];


        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        if(!empty($id[1])){
            $marqueSpecifiqueData =["marque" => $marques->get($id[1]),
                                    "logo" => $images->getMarqueLogo($id[1]) ,
                                    "vehicules" => $vehicules->getAllForMarque($id[1]),
                                    "images" => $images->getMarqueAllVehiculeImages($id[1]),
                                    "avis" => $avisMarque->getAllWithUsernamesForMarque($id[1]),
                                    "link" => "marque",
                                    "session" => $session,];
            $marqueSpecifiqueView->show($marqueSpecifiqueData);
        }else{
            $marquesView->show($marquesData);
        }
        $bottom->show(null);
        $footer->show(null);
    }
}