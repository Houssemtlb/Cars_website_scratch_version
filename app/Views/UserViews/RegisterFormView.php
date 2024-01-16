<?php

class RegisterFormView extends View
{
    public function show($submitted)
    {
        echo "<div class=\"section\">
                <h1>Inscrivez vous</h1>";
                if($submitted){echo "<p id='inscription-message' style='color: #D00000'>Veuillez patienter, votre compte sera valide dans quelques instants</p>";}
                echo"<form id='RegisterForm'  method=\"post\" action=\"http://localhost/cars_website_scratch_version/Public/Register\">
                          <div class=\"form-group\">
                            <label>nom</label>
                            <input required=\"required\" type=\"text\" class=\"form-control\" name=\"nom\">
                          </div>
                          <div class=\"form-group\">
                            <label>prenom</label>
                            <input required=\"required\" type=\"text\" class=\"form-control\" name=\"prenom\">
                          </div>
                           <div class=\"form-group\">
                            <label>email</label>
                            <input required=\"required\" class=\"form-control\" name=\"email\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"password\">mot de passe</label>
                            <input required=\"required\" type=\"password\" class=\"form-control\" name=\"mot_de_passe\">
                          </div>
                          <div class=\"form-group\">
                            <label for=\"date_naissance\">date de naissance</label>
                            <input required=\"required\" type=\"date\" class=\"form-control\" name=\"date_naissance\">
                          </div>
                          <div class=\"form-group\">
                          <label for=\"date_naissance\">sexe</label>
                            <select required=\"required\" class='form-control compare-select' name='sexe' form='RegisterForm'>
                                <option value='Homme'>Homme</option>
                                <option value='Femme'>Femme</option>
                            </select>
                          </div>
                          <button name=\"RegisterButton\" type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\">S'inscrire</button>";
                    echo"</form>";
             echo"</div>";
    }
}