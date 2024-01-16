<?php

//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/UserViews/TopBarView.php");
require_once("../app/Views/UserViews/MenuBarView.php");
require_once("../app/Views/UserViews/FooterView.php");
require_once("../app/Views/UserViews/ComparatorView.php");
require_once("../app/Views/UserViews/CompareTableView.php");

//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");
require_once ("../app/Models/ComparaisonModel.php");


class CompareController extends Controller{
    public function loadPage($ids)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();
        $comparaison = new ComparaisonModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $comparator = new ComparatorView();
        $table = new CompareTableView();

        //binding area
        unset($ids[0]); //to eliminate le nom du controlleur
        $tableData = [];
        foreach ($ids as $id) {
            $temp = $vehicules->get($id);
            $temp["images"] = $images->getVehiculeImages($id);
            $tableData[] = $temp;
        }
        $comparatorData = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare()];


        //incrementing les comparaisons les plus recherchees area
        if(isset($ids[1])){
            switch (count($ids)){
                case 2 :
                    $comparaison->addComparaison($ids[1],$ids[2]);
                    break;
                case 3 :
                    $comparaison->addComparaison($ids[1],$ids[2]);
                    $comparaison->addComparaison($ids[2],$ids[3]);
                    $comparaison->addComparaison($ids[3],$ids[4]);
                    break;
                case 4 :
                    $comparaison->addComparaison($ids[1], $ids[2]);
                    $comparaison->addComparaison($ids[2], $ids[3]);
                    $comparaison->addComparaison($ids[3], $ids[4]);
                    $comparaison->addComparaison($ids[4], $ids[1]);
                    $comparaison->addComparaison($ids[1], $ids[3]);
                    $comparaison->addComparaison($ids[2], $ids[4]);
                    break;
            }
        }










        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $comparator->show($comparatorData);
        $table->show($tableData);
        $bottom->show(null);
        $footer->show(null);
    }
}