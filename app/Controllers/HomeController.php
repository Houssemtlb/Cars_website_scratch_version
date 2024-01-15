<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/DiaporamaView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/MarquesView.php");
require_once("../app/Views/ComparatorView.php");
require_once("../app/Views/ComparaisonView.php");


//MODELS
require_once("../app/Models/NewsModel.php");
require_once("../app/Models/PubliciteModel.php");
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");
require_once ("../app/Models/ComparaisonModel.php");
require_once ("../app/Models/ImageModel.php");



class HomeController extends Controller
{
    public function loadPage($data)
    {

        //models declaration area
        $news = new NewsModel();
        $pub = new PubliciteModel();
        $marques = new MarqueModel();
        $images = new ImageModel();
        $vehicules = new VehiculeModel();
        $comparaisons = new ComparaisonModel();

        //views declaration area
        $head = new HeadView();
        $diaporama = new DiaporamaView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $section1 = new MarquesView();
        $section2 = new ComparatorView();
        $section3 = new ComparaisonView();


        //binding area
        $diapoData = ["news" => $news->getAllWithImages(), "pubs" => $pub->getAllWithImages()];
        $section1Data = ["size" => "small", "marques" => $marques->getAllWithImages()];
        $section2Data = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare()];
        $section3Data = [];

        foreach ($comparaisons->getFamous() as $couple){
            $vehicule1 = $vehicules->get($couple["vehicule_1_id"]);
            $vehicule1Image = $images->getVehiculeFirstImage($vehicule1["vehicule_id"]);
            $vehicule1 = array_merge($vehicule1,$vehicule1Image);

            $vehicule2 = $vehicules->get($couple["vehicule_2_id"]);
            $vehicule2Image = $images->getVehiculeFirstImage($vehicule2["vehicule_id"]);
            $vehicule2 = array_merge($vehicule2,$vehicule2Image);

            $section3Data[] = ["vehicule1" => $vehicule1, "vehicule2" => $vehicule2];
        }



        //display area
        $head->show(null);
        $topBar->show(null);
        $diaporama->show($diapoData);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $section1->show($section1Data);
        $section2->show($section2Data);
        $section3->show($section3Data);
        $bottom->show(null);
        $footer->show(null);
    }


}
