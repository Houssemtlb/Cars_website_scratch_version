<?php
//MODELS
require_once ("../app/Models/NewsModel.php");


//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminNewsTableView.php");
require_once("../app/Views/AdminViews/AdminNewsFormView.php");


class AdminNewsController extends Controller{

    public function loadPage($data)
    {
        //models declaration area
        $news = new NewsModel();

        $newsTableData = $news->getAll();

        //views declaration area
        $head = new HeadView();
        $form = new AdminNewsFormView();
        $table = new AdminNewsTableView();
        $bottom = new BottomView();


        if(isset($data[1])){
            switch ($data[1]){
                //MODELS
                case 'Modifier' :
                    $newsData = $news->get($data[2]);
                    if(array_key_exists("NewsButton",$_POST))
                    {
                        $news->update($_POST);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminNews");
                    }else{
                        $head->show(null);
                        $form->show($newsData);
                        $bottom->show(null);
                    }
                    break;
                case 'Supprimer' :
                        $news->delete($data[2]);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminNews");
                    break;
                case 'Ajouter' :
                    if(array_key_exists("NewsButton",$_POST))
                    {
                        $news->insert($_POST);
                        header("Location: http://localhost/cars_website_scratch_version/admin/AdminNews");
                    }else{
                        $head->show(null);
                        $form->show(null);
                        $bottom->show(null);
                    }
                    break;
            }
        }else{
            $head->show(null);
            $table->show($newsTableData);
            $bottom->show(null);
        }
    }
}