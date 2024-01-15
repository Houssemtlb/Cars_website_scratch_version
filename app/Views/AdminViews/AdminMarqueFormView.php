<?php

class AdminMarqueFormView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data['marque_id'] = "";
            $data['nom'] = "";
            $data['pays_origine'] = "";
            $data['siege_social'] = "";
            $data['annee_creation'] = "";
            $data['description'] = "";
            $data['note'] = "";
            $data['image_path'] = "";
            $action = "Ajouter";
        }else{
            $action = "Modifier";
        }
        echo "<div class=\"section\" style=\"height: 100%;\">
                    <form method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/AdminMarque/$action/$data[marque_id]\">
                    <div style=\"display: flex;flex-direction: row;\">
                        <div style=\"display: flex;flex-direction: column;margin: 20px;width: 350px\">
                              <input style='display: none'  class=\"form-control\" name=\"marque_id\" value=\"$data[marque_id]\">
                              <div class=\"form-group\">
                                    <label>nom</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"nom\" value=\"$data[nom]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>pays_origine</label>
                                    <input required=\"required\" class=\"form-control\" name=\"pays_origine\" value=\"$data[pays_origine]\">
                              </div>
                              <div class=\"form-group\">
                                    <label>siege_social</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"siege_social\" value=\"$data[siege_social]\">
                               </div>
                               <div class=\"form-group\">
                                    <label>annee_creation</label>
                                    <input type='date' required=\"required\" class=\"form-control\" name=\"annee_creation\" value=\"$data[annee_creation]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>description</label>
                                    <textarea required=\"required\"  class=\"form-control\" name=\"description\" >$data[description]</textarea>
                              </div>
                              <div class=\"form-group\">
                                    <label>note</label>
                                    <input type='number'  class=\"form-control\" name=\"note\" value='$data[note]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>image path</label>
                                    <input type='text' required=\"required\" class=\"form-control\" name=\"image_path\" value='$data[image_path]'>
                              </div>
                          </div>
                      </div>
                     <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\" name=\"MarqueButton\">$action</button>
                  </form>
              </div>";
    }
}
