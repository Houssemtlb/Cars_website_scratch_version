<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/DiaporamaView.php");
require_once("../app/Views/BottomView.php");

//MODELS
require_once("../app/Models/NewsModel.php");
require_once("../app/Models/PubliciteModel.php");

class HomeController extends Controller
{
    public function LoadPage()
    {
        //models declaration area
        $news = new NewsModel();
        $pub = new PubliciteModel();

        //views declaration area
        $head = new HeadView();
        $diaporama = new DiaporamaView();
        $bottom = new BottomView();

        //binding area
        $diapoData = ["news" => $news->getAllWithImages(), "pubs" => $pub->getAllWithImages()];

        //$marquesList = new MarquesListView();
        //$compare = new CompareView();
        //$famousCompare = new FamousCompareView();
        //$footer = new FooterView();

        //display area
        $head->show(null);
        $diaporama->show($diapoData);
        $bottom->show(null);
    }


}

//NEXT STEP, MAKE AND DISPLAY THE ACTUAL DIAPORAMA AND MAKE MARQUE AND VEHICLE MODELS