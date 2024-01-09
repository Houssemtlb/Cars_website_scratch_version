<?php
//VIEWS
require_once("../app/Views/AdminAuthView.php");
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");

//MODELS




class AdminAuthController extends Controller
{
    public function loadPage($data)
    {

        //models declaration area


        //views declaration area
        $head = new HeadView();
        $adminAuthView = new AdminAuthView();
        $bottom = new BottomView();


        //binding area
        unset($_SESSION['admin-authenticated']);


        //display area

        $head->show(null);
        $adminAuthView->show(null);
        $bottom->show(null);
    }


}