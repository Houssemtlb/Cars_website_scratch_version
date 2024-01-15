<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FavorisView.php");

//MODELS
require_once("../app/Models/UserModel.php");
require_once("../app/Models/VehiculeModel.php");
require_once("../app/Models/ImageModel.php");
class AccountController extends Controller
{
    public function loadPage($data)
    {
        //models declaration area
        $users = new UserModel();
        $vehicules = new VehiculeModel();
        $images = new ImageModel();

        if(isset($_SESSION['user-authenticated'])){
            //views declaration area
            $head = new HeadView();
            $bottom = new BottomView();
            $topBar = new TopBarView();
            $menuBar = new MenuBarView();
            $footer = new FooterView();
            $favoris = new FavorisView();


            //binding area
            $favorisData = $users->getFavorite($_SESSION['user_id']);
            $vehiculesFavoris = [];
            foreach($favorisData as $fav){
                $vehicule = $vehicules->get($fav['vehicule_id']);
                $vehicule = array_merge($vehicule,$images->getVehiculeFirstImage($vehicule['vehicule_id']));
                $vehiculesFavoris[] = $vehicule;
            }

            //display area
            $head->show(null);
            $topBar->show(null);
            $menuBar->show($_SESSION['user-authenticated']??null);
            $favoris->show($vehiculesFavoris);
            $bottom->show(null);
            $footer->show(null);
        }
    }
}
