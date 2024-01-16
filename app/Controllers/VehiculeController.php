<?php

//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/UserViews/TopBarView.php");
require_once("../app/Views/UserViews/MenuBarView.php");
require_once("../app/Views/UserViews/FooterView.php");
require_once("../app/Views/UserViews/VehiculeInfosView.php");
require_once("../app/Views/UserViews/ComparatorView.php");
require_once("../app/Views/UserViews/CompareTableView.php");
require_once("../app/Views/UserViews/ComparaisonView.php");

//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");
require_once ("../app/Models/AvisVehiculeModel.php");
require_once ("../app/Models/UserModel.php");
require_once ("../app/Models/ComparaisonModel.php");


class VehiculeController extends Controller{
    public function loadPage($id)
    {
        //models declaration area
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $marques = new MarqueModel();
        $avisVehicule = new AvisVehiculeModel();
        $users = new UserModel();
        $comparaisons = new ComparaisonModel();


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
            if(array_key_exists("FavorisButton",$_POST)){
                $user_id = $_POST['user_id'];
                $vehicule_id = $_POST['vehicule_id'];
                $users->addFavorite($vehicule_id,$user_id);
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
        $comparaison = new ComparaisonView();



        //binding area
        unset($id[0]); //to eliminate le nom du controlleur
        $vehiculeData = ["vehicule" => $vehicules->get($id[1]), "images" => $images->getVehiculeImages($id[1]), "avis" => $avisVehicule->avisLesPlusApprecies($id[1]),"session" => $session];
        $compareData = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare(), "specificVehicule" => $vehicules->get($id[1]), "specificMarque" => $marques->get($vehicules->get($id[1])["marque_id"])];
        $comparaisonData = [];

        foreach ($comparaisons->getFamousForVehicule($id[1]) as $couple){
            $vehicule1 = $vehicules->get($couple["vehicule_1_id"]);
            $vehicule1Image = $images->getVehiculeFirstImage($vehicule1["vehicule_id"]);
            $vehicule1 = array_merge($vehicule1,$vehicule1Image);

            $vehicule2 = $vehicules->get($couple["vehicule_2_id"]);
            $vehicule2Image = $images->getVehiculeFirstImage($vehicule2["vehicule_id"]);
            $vehicule2 = array_merge($vehicule2,$vehicule2Image);

            $comparaisonData[] = ["vehicule1" => $vehicule1, "vehicule2" => $vehicule2];
        }

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $vehiculeInfos->show($vehiculeData);
        $comparator->show($compareData);
        $comparaison->show($comparaisonData);
        $bottom->show(null);
        $footer->show(null);
    }
}