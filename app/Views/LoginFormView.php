<?php

class LoginFormView extends View
{
    public function show($data)
    {
        echo"<div class=\"section\" style='height: 80%'>
                <h1>Connectez vous</h1>
                <form style=\"margin-top: 50px\" method=\"post\" action=\"http://localhost/cars_website_scratch_version/Public/Login\">
                           <div class=\"form-group\">
                            <label>email</label>
                            <input required=\"required\"  class=\"form-control\" name=\"email\" >
                          </div>
                          <div class=\"form-group\">
                            <label for=\"mot_de_passe\">Password</label>
                            <input required=\"required\" type=\"password\" class=\"form-control\" name=\"mot_de_passe\">
                          </div>
                          <button name=\"LoginButton\" type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\">Login</button>
                          <a style='margin-top: 15px;' href='http://localhost/cars_website_scratch_version/public/Register'>Inscrivez vous</a>
                    </form>
             </div>";
    }
}