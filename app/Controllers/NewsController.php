<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/NewsView.php");
require_once("../app/Views/SpecificNewsView.php");
//MODELS
require_once("../app/Models/NewsModel.php");





class NewsController extends Controller
{
    public function loadPage($data)
    {


        //models declaration area
        $news = new NewsModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $newsView = new newsView();
        $specificNewsView = new SpecificNewsView();


        //binding area
        $newsData = $news->getAllWithImages();


        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        if(isset($data[1])){
            $specificNewsView->show($news->getWithImages($data[1]));
        }else{
            $newsView->show($newsData);
        }
        $bottom->show(null);
        $footer->show(null);
    }


}