<?php
//MODELS
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/ImageModel.php");


//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminAjouterMarqueView.php");



class AdminMarqueController extends Controller{

    public function loadPage($data)
    {
        //models declaration area
        $marques = new MarqueModel();

        //views declaration area
        $head = new HeadView();
        $form = new AdminAjouterMarqueView();
        $bottom = new BottomView();

        switch ($data[1]){
            //MODELS
            case 'Modifier' :
                //binding area
                $marqueData = $marques->get($data[2]);

                if(array_key_exists("MarqueButton",$_POST))
                {
                    $marques->update($_POST);
                    print_r($_POST);
                    header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                }

                //display area
                $head->show(null);
                $form->show($marqueData);
                $bottom->show(null);
                break;
            case 'Supprimer' :
                $marques->delete($data[2]);
                header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                break;
            case 'Ajouter' :
                //inserting area
                if(array_key_exists("MarqueButton",$_POST))
                {
                    $marques->insert($_POST);
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