<?php

class VehiculeInfosView extends View{

    public function show($data)
    {
        $vehicule = $data["vehicule"];
        $images = $data["images"];
        $avis = $data["avis"];
        $session = $data["session"];



        echo "
        <div class=\"section\">
            <h1>$vehicule[model]</h1>
            <div style=\"width:100%;display: flex; flex-direction: row; align-items: center; justify-content: space-between\">
                <div style=\"display: flex;flex-direction: row;align-items: center\">
                    <div style=\"padding-left: 30px\">
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Anne de fabrication : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[annee]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Moteur : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[moteur]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Cylindree : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[cylindree] Litres</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Consommation : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[consommation] L/100Km</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Nombre de cylindres : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[nb_cylindres]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Nombre de places : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[nb_places]</h4>
                        
                    </div>
                    <div style=\"padding-left: 100px\">
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Type : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[type]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Longueur : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[longueur]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Largeur : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[largeur]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Hauteur : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[hauteur]</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Prix : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[prix] $</h4>
                        <h4 style=\"color: #43C59E; margin-left: 10px\">Note : </h4>
                        <h4 style=\"margin: 20px\">$vehicule[note] /5</h4>
                    </div>
                </div> 
                <img style=\"margin:40px; height: 600px;object-fit: contain\" src=\"$images[0]\" alt=\"logo\"/>
            </div>";
            if(isset($session)){
                echo"<form method='post' action='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]'>
                                        <input style='display: none'  name='vehicule_id' value='$vehicule[vehicule_id]'>
                                        <input style='display: none'  name='user_id' value='$session[user_id]'>
                                        <button style='background-color: black;color: white' type='submit' name='FavorisButton' class='btn btn-sm'>Ajouter aux favoris</button>
                                     </form>";
            }
        echo"<h1>Avis les plus apprecies</h1>";

        foreach ($avis as $a) {
            echo "
                <a class=\"card\" style=\"margin-bottom: 20px;width: 800px; text-decoration: none;color: black; padding: 10px;border-radius: 8px\">
                    <div style=\"display: flex; flex-direction: row; align-items: center;justify-content: space-between; width:100%\">";
            echo "
                        <div style=\"display: flex;flex-direction: column; margin-left: 10px\">
                            <h6>Utilisateur : $a[nom] $a[prenom]</h6>
                            <h6>Note : $a[note]/5</h6>
                            <h6>Avis : $a[avis]</h6>
                            <h6>Appreciation : $a[appreciation] likes</h6>
                        </div> ";
                        if(isset($session)){
                            echo"<form method='post' action='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]/like'>
                                        <input style='display: none'  name='avis_vehicule_id' value='$a[avis_vehicule_id]'>
                                        <button type='submit' name='LikeButton' class='btn btn-sm'>Like</button>
                                     </form>";
                        }
            echo"
                    </div>
                </a>
                ";
        }
        echo"<a href='http://localhost/cars_website_scratch_version/admin/AvisVehicule/$vehicule[vehicule_id]' type=\"button\" class=\"btn btn-secondary btn-lg btn-block\" style='width: 30%;background-color: black'>voir plus d'avis</a>";
        if (isset($session)){
            echo"<h1>Donnez votre avis</h1>
                      <form method=\"post\" action=\"http://localhost/cars_website_scratch_version/admin/Vehicule/$vehicule[vehicule_id]\">
                           <input style='display: none' type=\"number\" class=\"form-control\" name=\"user_id\" value=\"$session[user_id]\">
                           <input style='display: none' type=\"number\" class=\"form-control\" name=\"vehicule_id\" value=\"$vehicule[vehicule_id]\">
                           <div class=\"form-group\">
                            <label>Note /5</label>
                            <input type=\"number\" class=\"form-control\" name=\"note\">
                          </div>
                          <div class=\"form-group\">
                            <label>Avis</label>
                            <textarea style=\"width: 300px\" class=\"form-control\" name=\"avis\"></textarea>
                          </div>
                          <button style='background-color: black' name=\"avisVehiculeButton\" type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\">Envoyer</button>
                    </form>";
        }
        echo"</div>";
    }
}