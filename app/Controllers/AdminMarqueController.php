<?php
//MODELS
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/ImageModel.php");


//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/AdminViews/AdminMarqueFormView.php");



class AdminMarqueController extends Controller{

    public function loadPage($data)
    {
        if(isset($_SESSION['admin-authenticated'])) {
            //models declaration area
            $marques = new MarqueModel();
            $images = new ImageModel();

            //views declaration area
            $head = new HeadView();
            $form = new AdminMarqueFormView();
            $bottom = new BottomView();

            switch ($data[1]) {
                //MODELS
                case 'Modifier' :
                    //binding area
                    $marqueData = $marques->get($data[2]);
                    $marqueData = array_merge($marqueData,$images->getMarqueLogo($data[2]));

                    if (array_key_exists("MarqueButton", $_POST)) {
                        $marqueData = $marques->get($_POST['marque_id']);
                        $marqueData = array_merge($marqueData,$images->getMarqueLogo($_POST['marque_id']));

                        $imagesData = ["path" => $_POST["image_path"], "old_path" => $images->getMarqueLogo($data[2])[0]];

                        $images->update($imagesData);
                        $marques->update($_POST);
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
                    if (array_key_exists("MarqueButton", $_POST)) {
                        $marques->insert($_POST);
                        $marque = $marques->getLastMarqueInserted();
                        $images->addMarqueImage($marque["marque_id"],$_POST["image_path"]);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminMV");
                    }

                    //display area
                    $head->show(null);
                    $form->show(null);
                    $bottom->show(null);
                    break;
            }
        }else{
            header("Location: http://localhost/cars_website_scratch_version/admin/AdminAuth");
        }

    }
}