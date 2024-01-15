<?php

class AdminUsersFormView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data['user_id'] = "";
            $data['nom'] = "";
            $data['prenom'] = "";
            $data['mot_de_passe'] = "";
            $data['email'] = "";
            $data['date_naissance'] = "";
            $data['sexe'] = "";
            $action = "Ajouter";
        }else{
            $action = "Modifier";
        }
        echo "<div class=\"section\" style=\"height: 100%;\" id='UsersForm'>
                    <form id='ActionUserForm' method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/AdminUsers/$action/$data[user_id]\">
                    <div style=\"display: flex;flex-direction: row;\">
                        <div style=\"display: flex;flex-direction: column;margin: 20px;width: 350px\">
                              <input style='display: none'  class=\"form-control\" name=\"user_id\" value=\"$data[user_id]\">
                              <div class=\"form-group\">
                                    <label>nom</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"nom\" value=\"$data[nom]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>prenom</label>
                                    <input required=\"required\" class=\"form-control\" name=\"prenom\" value=\"$data[prenom]\">
                              </div>
                              <div class=\"form-group\">
                                    <label>email</label>
                                    <input type='email' required=\"required\" class=\"form-control\" name=\"email\" value=\"$data[email]\">
                              </div>
                              <div class=\"form-group\">
                                    <label>date_naissance</label>
                                    <input type=\"date\" required=\"required\" class=\"form-control\" name=\"date_naissance\" value='$data[date_naissance]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>sexe</label>
                                    <select required=\"required\" class='form-control' name='sexe' form='ActionUserForm'>
                                        <option value='Homme'>Homme</option>
                                        <option value='Femme'>Femme</option>
                                    </select>
                              </div>
                          </div>
                      </div>";
                     if($action=='Ajouter'){echo"<input style='display: none' value='user' name='mot_de_passe'>";}
                     echo"<button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\" name=\"UsersButton\">$action</button>
                  </form>
              </div>";
    }
}