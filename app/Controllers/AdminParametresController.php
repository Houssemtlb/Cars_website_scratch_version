<?php
//VIEWS
require_once("../app/Views/UserViews/HeadView.php");
require_once("../app/Views/UserViews/BottomView.php");
require_once("../app/Views/AdminViews/AdminContactsTableView.php");
require_once("../app/Views/AdminViews/AdminContactsFormView.php");

//MODELS
require_once ("../app/Models/ContactModel.php");



class AdminParametresController extends Controller{
    public function loadPage($data)
    {
        //models declaration area
        $contacts = new ContactModel();


        //views declaration area
        $head = new HeadView();
        $table = new AdminContactsTableView();
        $form = new AdminContactsFormView();
        $bottom = new BottomView();


        //binding area
        $contactsData = $contacts->getAll();

        if(isset($_SESSION['admin-authenticated'])){
            if(isset($data[1])){
                switch ($data[1]){
                    //MODELS
                    case 'Modifier' :
                        $contactsData = $contacts->get($data[2]);
                        if(array_key_exists("ContactsButton",$_POST))
                        {
                            $contacts->update($_POST);
                            header("Location: http://localhost/cars_website_scratch_version/admin/AdminParametres");
                        }else{
                            $head->show(null);
                            $form->show($contactsData);
                            $bottom->show(null);
                        }
                        break;
                    case 'Supprimer' :
                        $contacts->delete($data[2]);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminParametres");
                        break;
                    case 'Ajouter' :
                        if(array_key_exists("ContactsButton",$_POST))
                        {
                            $contacts->insert($_POST);
                            header("Location: http://localhost/cars_website_scratch_version/admin/AdminParametres");
                        }else{
                            $head->show(null);
                            $form->show(null);
                            $bottom->show(null);
                        }
                        break;
                }
            }else{
                $head->show(null);
                $table->show($contactsData);
                $bottom->show(null);
            }
        }else{
            header("Location: http://localhost/cars_website_scratch_version/admin/AdminAuth");
        }
    }
}