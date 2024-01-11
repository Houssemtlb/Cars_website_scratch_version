<?php
//MODELS
require_once ("../app/Models/AvisMarqueModel.php");
require_once ("../app/Models/AvisVehiculeModel.php");
require_once ("../app/Models/UserModel.php");


//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminMarqueAvisTableView.php");
require_once("../app/Views/AdminViews/AdminVehiculeAvisTableView.php");


class AdminAvisController extends Controller{

    public function loadPage($data)
    {
        if(isset($_SESSION['admin-authenticated'])){
            //models declaration area
            $avisMarques = new AvisMarqueModel();
            $avisVehicules = new AvisVehiculeModel();

            if(isset($data[1])){
                switch ($data[1]){
                    //MODELS
                    case 'ValiderMarque' :
                        $avis = $avisMarques->get($data[2]);
                        $avis['valide'] = 1;
                        $avisMarques->update($avis);
                        break;
                    case 'RefuserMarque' :
                        $avisMarques->delete($data[2]);
                        break;
                    case 'ValiderVehicule' :
                        $avis = $avisVehicules->get($data[2]);
                        $avis['valide'] = 1;
                        $avisVehicules->update($avis);
                        break;
                    case 'RefuserVehicule' :
                        $avisVehicules->delete($data[2]);
                        break;

                }
            }


            //views declaration area
            $head = new HeadView();
            $avisMarqueTable = new AdminMarqueAvisTableView();
            $avisVehiculeTable = new AdminVehiculeAvisTableView();
            $bottom = new BottomView();


            $avisMarquesData = $avisMarques->getAll();
            $avisVehiculeData = $avisVehicules->getAll();

            $head->show(null);
            $avisMarqueTable->show($avisMarquesData);
            $avisVehiculeTable->show($avisVehiculeData);
            $bottom->show(null);
        }else{
            header("Location: http://localhost/cars_website_scratch_version/admin/AdminAuth");
        }

    }
}