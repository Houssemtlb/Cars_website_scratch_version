<?php
//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/UserViews/TopBarView.php");
require_once("../app/Views/UserViews/MenuBarView.php");
require_once("../app/Views/UserViews/FooterView.php");
require_once("../app/Views/UserViews/RegisterFormView.php");

//MODELS
require_once("../app/Models/UserModel.php");


class RegisterController extends Controller
{
    public function loadPage($data)
    {
        //models declaration area
        $users = new UserModel();


        $submitted = false;
        if(array_key_exists("RegisterButton",$_POST)){
            $submitted = true;
            $users->insert($_POST);
        }


        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $form = new RegisterFormView();





        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        $form->show($submitted);
        $bottom->show(null);
        $footer->show(null);
    }
}