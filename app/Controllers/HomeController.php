<?php
require_once("../app/Views/HeadView.php");
require_once("../app/Views/DiaporamaView.php");
require_once("../app/Views/BottomView.php");

class HomeController extends Controller
{
    public function LoadPage()
    {
        $head = new HeadView();
        $diaporama = new DiaporamaView();
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
