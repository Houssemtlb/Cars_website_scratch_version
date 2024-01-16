<?php
//MODELS
require_once ("../app/Models/UserModel.php");


//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/AdminViews/AdminUsersTableView.php");
require_once("../app/Views/AdminViews/AdminUsersFormView.php");


class AdminUsersController extends Controller{

    public function loadPage($data)
    {
        //models declaration area
        $user = new UserModel();

        $userTableData = $user->getAll();

        //views declaration area
        $head = new HeadView();
        $form = new AdminUsersFormView();
        $table = new AdminUsersTableView();
        $bottom = new BottomView();


        if(isset($_SESSION['admin-authenticated'])){
            if(isset($data[1])){
                switch ($data[1]){
                    //MODELS
                    case 'Modifier' :
                        $userData = $user->get($data[2]);
                        if(array_key_exists("UsersButton",$_POST))
                        {
                            $u = $user->get($_POST['user_id']);
                            $u = array_merge($u,$_POST);
                            $user->update($u);
                            header("Location: http://localhost/cars_website_scratch_version/admin/AdminUsers");
                        }else{
                            $head->show(null);
                            $form->show($userData);
                            $bottom->show(null);
                        }
                        break;
                    case 'Supprimer' :
                        $user->delete($data[2]);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminUsers");
                        break;
                    case 'Ajouter' :
                        if(array_key_exists("UsersButton",$_POST))
                        {
                            $user->insert($_POST);
                            header("Location: http://localhost/cars_website_scratch_version/admin/AdminUsers");
                        }else{
                            $head->show(null);
                            $form->show(null);
                            $bottom->show(null);
                        }
                        break;
                    case 'Bloquer' :
                       $u = $user->get($data[2]);
                       $u['valide'] = 0;
                       $user->update($u);
                       header("Location: http://localhost/cars_website_scratch_version/admin/AdminUsers");
                       break;
                    case 'Valider' :
                        $u = $user->get($data[2]);
                        $u['valide'] = 1;
                        $user->update($u);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminUsers");
                        break;
                }
            }else{
                $head->show(null);
                $table->show($userTableData);
                $bottom->show(null);
            }
        }else{
            header("Location: http://localhost/cars_website_scratch_version/admin/AdminAuth");
        }
    }
}