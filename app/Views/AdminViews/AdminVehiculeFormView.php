<?php

class AdminVehiculeFormView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data["vehicule_id"] = "";
            $data["marque_id"] = "";
            $data["model"] = "";
            $data["version"] = "";
            $data["annee"] = "";
            $data["prix"] = "";
            $data["moteur"] = "";
            $data["cylindree"] = "";
            $data["consommation"] = "";
            $data["nb_cylindres"] = "";
            $data["nb_places"] = "";
            $data["type"] = "";
            $data["longueur"] = "";
            $data["largeur"] = "";
            $data["hauteur"] = "";
            $data["note"] = "";
            $data['image_path'] = "";
            $action = "Ajouter";
        }else{
            $action = "Modifier";
        }


        echo "<div class=\"section\">
                    <form method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/AdminVehicule/$action/$data[vehicule_id]\">
                    <div style=\"display: flex;flex-direction: row\">
                        <div style=\"display: flex;flex-direction: column;margin: 20px\">
                              <input style=\"display: none\" name=\"vehicule_id\" value=\"$data[vehicule_id]\">
                              <div class=\"form-group\">
                                    <label>marque_id</label>
                                    <input required=\"required\" class=\"form-control\" name=\"marque_id\" value='$data[marque_id]'>
                               </div>
                              <div class=\"form-group\">
                                    <label>model</label>
                                    <input required=\"required\" class=\"form-control\" name=\"model\" value='$data[model]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>version</label>
                                    <input required=\"required\" class=\"form-control\" name=\"version\" value='$data[version]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>annee</label>
                                    <input required=\"required\" class=\"form-control\" name=\"annee\" value='$data[annee]'>
                               </div>
                              <div class=\"form-group\">
                                    <label>prix</label>
                                    <input required=\"required\" class=\"form-control\" name=\"prix\" value='$data[prix]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>moteur</label>
                                    <input required=\"required\" class=\"form-control\" name=\"moteur\" value='$data[moteur]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>cylindree</label>
                                    <input required=\"required\" class=\"form-control\" name=\"cylindree\" value='$data[cylindree]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>note</label>
                                    <input required=\"required\" class=\"form-control\" name=\"note\" value='$data[note]'>
                               </div>
                          </div>
                          <div style=\"display: flex;flex-direction: column;margin: 20px\">
                              <div class=\"form-group\">
                                    <label>consommation</label>
                                    <input required=\"required\" class=\"form-control\" name=\"consommation\" value='$data[consommation]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>nb_cylindres</label>
                                    <input required=\"required\" class=\"form-control\" name=\"nb_cylindres\" value='$data[nb_cylindres]'>
                               </div>
                              <div class=\"form-group\">
                                    <label>nb_places</label>
                                    <input required=\"required\" class=\"form-control\" name=\"nb_places\" value='$data[nb_places]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>type</label>
                                    <input required=\"required\" class=\"form-control\" name=\"type\" value='$data[type]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>longueur</label>
                                    <input required=\"required\" class=\"form-control\" name=\"longueur\" value='$data[longueur]'>
                               </div>
                              <div class=\"form-group\">
                                    <label>largeur</label>
                                    <input required=\"required\" class=\"form-control\" name=\"largeur\" value='$data[largeur]'>
                              </div>
                              <div class=\"form-group\">
                                    <label>hauteur</label>
                                    <input required=\"required\" class=\"form-control\" name=\"hauteur\" value='$data[hauteur]'>
                               </div>
                               <div class=\"form-group\">
                                    <label>image path</label>
                                    <input type='text' required=\"required\" class=\"form-control\" name=\"image_path\" value='$data[image_path]'>
                              </div>
                          </div>
                      </div>
                     <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\" name=\"VehiculeButton\">$action</button>
                  </form>
              </div>";
    }
}
?>
