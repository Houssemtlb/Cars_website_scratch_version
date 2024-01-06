<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/TopBarView.php");
require_once("../app/Views/MenuBarView.php");
require_once("../app/Views/FooterView.php");
require_once("../app/Views/ContactView.php");

//MODELS
require_once("../app/Models/ContactModel.php");





class ContactController extends Controller
{
    public function loadPage()
    {

        //models declaration area
        $contact = new NewsModel();

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $contactView = new ContactView();


        //binding area




        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show(null);

        $bottom->show(null);
        $footer->show(null);
    }


}
