<?php
//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/UserViews/TopBarView.php");
require_once("../app/Views/UserViews/MenuBarView.php");
require_once("../app/Views/UserViews/FooterView.php");
require_once("../app/Views/UserViews/LoginFormView.php");

//MODELS
require_once("../app/Models/UserModel.php");


class LoginController extends Controller
{
    public function loadPage($data)
    {
        //models declaration area
        $users = new UserModel();

        if(array_key_exists("LoginButton",$_POST) && $users->verifyLogin($_POST)){
            $user_id = $users->verifyLogin($_POST);
            $user = $users->get($user_id);

            $_SESSION['user-authenticated'] = 'true';
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['sexe'] = $user['sexe'];
            $_SESSION['date_naissance'] = $user['date_naissance'];

            header("Location: http://localhost/cars_website_scratch_version/Public/Account");
        }

        //views declaration area
        $head = new HeadView();
        $bottom = new BottomView();
        $topBar = new TopBarView();
        $menuBar = new MenuBarView();
        $footer = new FooterView();
        $form = new LoginFormView();


        //binding area



        //display area
        $head->show(null);
        $topBar->show(null);
        $menuBar->show($_SESSION['user-authenticated']??null);
        if(isset($_SESSION['user-authenticated'])){

        }else{

        }
        $form->show(null);
        $bottom->show(null);
        $footer->show(null);
    }
}
