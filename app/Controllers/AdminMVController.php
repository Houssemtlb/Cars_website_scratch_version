<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminMarquesTable.php");

//MODELS
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/ImageModel.php");

class AdminMVController extends Controller{
    public function loadPage($data)
    {
        //models declaration area
        $vehicules = new VehiculeModel();
        $marques = new MarqueModel();



        //views declaration area
        $head = new HeadView();

        $marquesTable = new AdminMarquesTable();
        $bottom = new BottomView();


        //binding area
        $vehiculesTableData = $vehicules->getAll();
        $marquesTableData = $marques->getAll();



        //display area
        $head->show(null);
        $marquesTable->show($marquesTableData);
        $bottom->show(null);
    }
}