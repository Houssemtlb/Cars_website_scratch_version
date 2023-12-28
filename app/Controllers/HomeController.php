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

//MODELS
require_once("../app/Models/NewsModel.php");
require_once("../app/Models/PubliciteModel.php");
require_once ("../app/Models/MarqueModel.php");
require_once ("../app/Models/VehiculeModel.php");




class HomeController extends Controller
{
    public function loadPage()
    {

        //models declaration area
        $news = new NewsModel();
        $pub = new PubliciteModel();
        $marques = new MarqueModel();
        $vehicule = new VehiculeModel();

        //views declaration area
        $head = new HeadView();
        $diaporama = new DiaporamaView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $section1 = new MarquesView();
        $section2 = new ComparatorView();


        //binding area
        $diapoData = ["news" => $news->getAllWithImages(), "pubs" => $pub->getAllWithImages()];
        $section1Data = ["size" => "small", "marques" => $marques->getAllWithImages()];
        $section2Data = ["marques" => $marques->getAll(), "vehicules" => $marques->getAllForCompare()];




        //display area
        $head->show(null);
        $topBar->show(null);
        $diaporama->show($diapoData);
        $menuBar->show(null);
        $section1->show($section1Data);
        $section2->show($section2Data);
        $bottom->show(null);
        $footer->show(null);
    }


}
