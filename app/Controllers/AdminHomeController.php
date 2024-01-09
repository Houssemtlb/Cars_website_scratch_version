<?php
//VIEWS
require_once("../app/Views/AdminViews/AdminHomeView.php");
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");

//MODELS




class AdminHomeController extends Controller
{
    public function loadPage($data)
    {
        if(isset($_SESSION['admin-authenticated'])){

            //models declaration area


            //views declaration area
            $head = new HeadView();
            $adminHomeView = new AdminHomeView();
            $bottom = new BottomView();


            //binding area



            //display area
            $head->show(null);
            $adminHomeView->show(null);
            $bottom->show(null);
        }else{
            header("Location: http://localhost/cars_website_scratch_version/admin/AdminAuth");
        }
    }


}