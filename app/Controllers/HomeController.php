<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/DiaporamaView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/MarquesView.php");

//MODELS
require_once("../app/Models/NewsModel.php");
require_once("../app/Models/PubliciteModel.php");
require_once ("../app/Models/MarqueModel.php");

class HomeController extends Controller
{
    public function LoadPage()
    {
        //models declaration area
        $news = new NewsModel();
        $pub = new PubliciteModel();
        $marques = new MarqueModel();

        //views declaration area
        $head = new HeadView();
        $diaporama = new DiaporamaView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $section1 = new MarquesView();

        //binding area
        $diapoData = ["news" => $news->getAllWithImages(), "pubs" => $pub->getAllWithImages()];
        $section1Data = ["size" => "small", "marques" => $marques->getAllWithImages()];

        //$marquesList = new MarquesListView();
        //$compare = new CompareView();
        //$famousCompare = new FamousCompareView();
        //$footer = new FooterView();

        //display area
        $head->show(null);
        $topBar->show(null);
        $diaporama->show($diapoData);
        $menuBar->show(null);
        $section1->show($section1Data);
        $bottom->show(null);
        $footer->show(null);
    }


}

//NEXT STEP, MAKE AND DISPLAY THE ACTUAL DIAPORAMA AND MAKE MARQUE AND VEHICLE MODELS