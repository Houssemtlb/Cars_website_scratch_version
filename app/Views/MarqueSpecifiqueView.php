<?php

class MarqueSpecifiqueView extends View
{

    public function show($data)
    {
        $marque = $data["marque"];
        $logo = $data["logo"];
        $vehicules = $data["vehicules"];
        $images = $data["images"];

        echo "
        <div class='section'>
            <h1>$marque[nom]</h1>
            <div style='width:100%;display: flex; flex-direction: row; align-items: center; justify-content: space-between'>
                <div>
                    <h2 style='color: #43C59E; margin-left: 10px'>Pays d'origine : </h2>
                    <h3 style='margin: 20px'>$marque[pays_origine]</h3>
                    <h2 style='color: #43C59E; margin-left: 10px'>Siege social : </h2>
                    <h3 style='margin: 20px'>$marque[siege_social]</h3>
                    <h2 style='color: #43C59E; margin-left: 10px'>annee de creation : </h2>
                    <h3 style='margin: 20px'>$marque[annee_creation]</h3>
                    <h2 style='color: #43C59E; margin-left: 10px'>Description : </h2>
                    <h6 style='margin: 20px'>$marque[description]</h6>
                </div> 
                <img style='margin:40px' src='$logo[image_path]' alt='logo'/>
            </div>
            
            
            <button class='btn btn-secondary btn-lg btn-block collapseVehicules' type='button' data-toggle='collapse' data-target='#collapseVoitures' aria-expanded='false' aria-controls='collapseVoitures'>
                Vehicules de $marque[nom]
            </button>
            
            <div class='collapse' id='collapseVoitures' style='width: 90%'>";

        foreach ($vehicules as $vehicule) {
            echo "
                <a class='card' style='margin-bottom: 20px; text-decoration: none;color: black' href='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]'>
                    <div style='display: flex; flex-direction: row; align-items: center; width:100%'>";

            foreach ($images as $image) {
                if ($image["vehicule_id"] == $vehicule["vehicule_id"]) {
                    echo "<img src='$image[image_path]' style='height: 100%; width:230px; object-fit: contain'/>";
                }
            }

            echo "
                        <div style='display: flex;flex-direction: column; margin-left: 10px'>
                            <h6>Model : $vehicule[model]</h6>
                            <h6>Version : $vehicule[version]</h6>
                            <h6>Annee : $vehicule[annee]</h6>
                            <h6>Prix : $vehicule[prix] $</h6>
                        </div>";
            echo "
                    </div>
                </a>";
        }

        echo "
            </div>
        </div>";



    }
}
