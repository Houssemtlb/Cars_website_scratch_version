<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/DiaporamaView.php");
require_once("../app/Views/BottomView.php");

//MODELS
require_once("../app/Models/NewsModel.php");

class HomeController extends Controller
{
    public function LoadPage()
    {
        $head = new HeadView();
        $diaporama = new DiaporamaView();

        //testing area
        $news = new NewsModel();
        print_r($news->getPicturesPaths(1));

        //$marquesList = new MarquesListView();
        //$compare = new CompareView();
        //$famousCompare = new FamousCompareView();
        //$footer = new FooterView();
        $bottom = new BottomView();

        $head->show(null);
        $diaporama->show(null);
        $bottom->show(null);
    }

    //and then we pass data to the views and load them at the same time


}
