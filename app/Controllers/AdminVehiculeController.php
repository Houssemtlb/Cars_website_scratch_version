<?php
//MODELS
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ImageModel.php");


//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminVehiculeFormView.php");



class AdminVehiculeController extends Controller{

    public function loadPage($data)
    {
        //models declaration area
        $vehicules = new VehiculeModel();

        //views declaration area
        $head = new HeadView();
        $form = new AdminVehiculeFormView();
        $bottom = new BottomView();

        switch ($data[1]){
            //MODELS
            case 'Modifier' :
                //binding area
                $vehiculeData = $vehicules->get($data[2]);


                if(array_key_exists("VehiculeButton",$_POST))
                {
                    $vehiculeData = $vehicules->get($_POST['vehicule_id']);
                    $vehicules->update($_POST);
                    header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                }

                //display area
                $head->show(null);
                $form->show($vehiculeData);
                $bottom->show(null);
                break;
            case 'Supprimer' :
                $vehicules->delete($data[2]);
                header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                break;
            case 'Ajouter' :
                //inserting area
                if(array_key_exists("VehiculeButton",$_POST))
                {
                    $vehicules->insert($_POST);
                    header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                }

                //display area
                $head->show(null);
                $form->show(null);
                $bottom->show(null);
                break;
        }
    }
}