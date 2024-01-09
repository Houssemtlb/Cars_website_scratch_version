<?php
//VIEWS
require_once("../app/Views/HeadView.php");
require_once("../app/Views/BottomView.php");
require_once("../app/Views/AdminViews/AdminContactsTable.php");

//MODELS
require_once ("../app/Models/ContactModel.php");



class AdminParametresController extends Controller{
    public function loadPage($data)
    {
        //models declaration area
        $contacts = new ContactModel();

        //views declaration area
        $head = new HeadView();
        $table = new AdminContactsTable();
        $bottom = new BottomView();


        //binding area
        $tableData = $contacts->getAll();


        //display area


        $head->show(null);
        $table->show($tableData);
        $bottom->show(null);
    }
}