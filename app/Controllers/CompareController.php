<?php

//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/ComparatorView.php");
require_once("../app/Views/CompareTableView.php");

//MODELS
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");



class CompareController extends Controller{
    public function loadPage($ids)
    {

        //models declaration area
        $marques = new MarqueModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $section2 = new ComparatorView();
        $table = new CompareTableView();

        //binding area
        unset($ids[0]); //to eliminate le nom du controlleur
        $tableData = [];
        foreach ($ids as $id) {
            $temp = $vehicules->get($id);
            $temp["images"] = $images->getVehiculeImages($id);
            $tableData[] = $temp;
        }
        $section2Data = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare()];

        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $section2->show($section2Data);
        $table->show($tableData);
        $bottom->show(null);
        $footer->show(null);
    }
}