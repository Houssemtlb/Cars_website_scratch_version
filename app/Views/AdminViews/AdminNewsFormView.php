<?php

class AdminNewsFormView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data['news_id'] = "";
            $data['title'] = "";
            $data['date'] = "";
            $data['news'] = "";
            $action = "Ajouter";
        }else{
            $action = "Modifier";
        }
        echo "<div class=\"section\" style=\"height: 100%;\" id='NewsForm'>
                    <form method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/AdminNews/$action/$data[news_id]\">
                    <div style=\"display: flex;flex-direction: row\">
                        <div style=\"display: flex;flex-direction: column;margin: 20px;width: 350px\">
                              <input style='display: none'  class=\"form-control\" name=\"news_id\" value=\"$data[news_id]\">
                              <div class=\"form-group\">
                                    <label>nom</label>
                                    <input required=\"required\"  class=\"form-control\" name=\"title\" value=\"$data[title]\">
                               </div>
                              <div class=\"form-group\">
                                    <label>pays_origine</label>
                                    <input type='date' required=\"required\" class=\"form-control\" name=\"date\" value=\"$data[date]\">
                              </div>
                              <div class=\"form-group\">
                                    <label>description</label>
                                    <textarea required=\"required\"  class=\"form-control\" name=\"news\" >$data[news]</textarea>
                              </div>
                          </div>
                      </div>
                     <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\" name=\"NewsButton\">$action</button>
                  </form>
              </div>";
    }
}