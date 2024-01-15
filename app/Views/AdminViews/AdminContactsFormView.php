<?php

class AdminContactsFormView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data['contact_id'] = "";
            $data['nom'] = "";
            $data['prenom'] = "";
            $data['email'] = "";
            $action = "Ajouter";
        }else{
            $action = "Modifier";
        }
        echo "<div class=\"section\" style=\"height: 100%;\" id='ContactsForm'>
                    <form method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/AdminParametres/$action/$data[contact_id]\">
                    <div style=\"display: flex;flex-direction: row\">
                        <div style=\"display: flex;flex-direction: column;margin: 20px;width: 350px\">
                              <input style='display: none'  class=\"form-control\" name=\"contact_id\" value=\"$data[contact_id]\">
                              <div class=\"form-group\">
                                    <label>nom</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"nom\" value=\"$data[nom]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>prenom</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"prenom\" value=\"$data[prenom]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>email</label>
                                    <input  required=\"required\" class=\"form-control\" name=\"email\" value=\"$data[email]\">
                              </div>
                          </div>
                      </div>
                     <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\" name=\"ContactsButton\">$action</button>
                  </form>
              </div>";
    }
}