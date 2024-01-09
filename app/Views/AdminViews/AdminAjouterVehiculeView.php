<?php

class AdminAjouterVehiculeView extends View{

    public function show($data)
    {
        if(!isset($data)){
            $data['marque_id'] = "";
            $data['model'] = "";
            $data['version'] = "";
            $data['annee'] = "";
            $data['prix'] = "";
            $data['moteur'] = "";
            $data['cylindree'] = "";
            $data['consommation'] = "";
            $data['nb_cylindres'] = "";
            $data['nb_places'] = "";
            $data['type'] = "";
            $data['longueur'] = "";
            $data['largeur'] = "";
            $data['hauteur'] = "";
        }

        echo'<div class="section">
                    <form method="post" action="http://localhost/cars_website_scratch_version/admin/AdminMarque/Ajouter">
                    <div style="display: flex;flex-direction: row">
                        <div style="display: flex;flex-direction: column;margin: 20px">
                              <div class="form-group">
                                    <label>marque_id</label>
                                    <input required="required"  class="form-control" name="marque_id">$data[marque_id]</input>
                               </div>
                              <div class="form-group">
                                    <label>model</label>
                                    <input required="required" class="form-control" name="model">$data[model]</input>
                              </div>
                              <div class="form-group">
                                    <label>version</label>
                                    <input required="required"  class="form-control" name="version">$data[version]</input>
                               </div>
                               <div class="form-group">
                                    <label>annee</label>
                                    <input required="required" class="form-control" name="annee">$data[annee]</input>
                               </div>
                              <div class="form-group">
                                    <label>prix</label>
                                    <input required="required"  class="form-control" name="prix">$data[prix]</input>
                              </div>
                              <div class="form-group">
                                    <label>moteur</label>
                                    <input required="required" class="form-control" name="moteur">$data[moteur]</input>
                               </div>
                               <div class="form-group">
                                    <label>cylindrée</label>
                                    <input required="required"  class="form-control" name="cylindrée">$data[cylindrée]</input>
                               </div>
                          </div>
                          <div style="display: flex;flex-direction: column;margin: 20px">
                              <div class="form-group">
                                    <label>consommation</label>
                                    <input required="required" class="form-control" name="consommation">$data[consommation]</input>
                               </div>
                               <div class="form-group">
                                    <label>nb_cylindres</label>
                                    <input required="required"  class="form-control" name="nb_cylindres">$data[nb_cylindres]</input>
                               </div>
                              <div class="form-group">
                                    <label>nb_places</label>
                                    <input required="required" class="form-control" name="nb_places">$data[nb_places]</input>
                              </div>
                              <div class="form-group">
                                    <label>type</label>
                                    <input required="required"  class="form-control" name="type">$data[type]</input>
                               </div>
                               <div class="form-group">
                                    <label>longueur</label>
                                    <input required="required" class="form-control" name="longueur">$data[longueur]</input>
                               </div>
                              <div class="form-group">
                                    <label>largeur</label>
                                    <input required="required"  class="form-control" name="largeur">$data[largeur]</input>
                              </div>
                              <div class="form-group">
                                    <label>hauteur</label>
                                    <input required="required" class="form-control" name="hauteur">$data[hauteur]</input>
                               </div>
                               <div class="form-group">
                                    <label>note</label>
                                    <input required="required"  class="form-control" name="note">$data[note]</input>
                               </div>
                          </div>
                      </div>
                     <button type="submit" class="btn btn-secondary btn-lg btn-block" name="VehiculeButton">Ajouter</button>
                  </form>
              </div>';
    }
}