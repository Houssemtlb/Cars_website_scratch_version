<?php

class FavorisView extends View{

    public function show($data)
    {
        echo"<div class='section' style='height: 100%;'>";
        if(isset($data)){
            echo"<h1>Vehicules favoris</h1>";
            foreach($data as $vehicule){
                echo "<a class='card' style='margin-bottom: 20px; text-decoration: none;color: black;border-radius: 8px;width: 70%' href='http://localhost/cars_website_scratch_version/public/Vehicule/$vehicule[vehicule_id]'>";
                echo"<div style='display: flex; flex-direction: row; align-items: center; width:100%'>";
                echo"<img src='$vehicule[image_path]' style='height: 100%; width:230px; object-fit: contain'/>";
                echo "
                        <div style='display: flex;flex-direction: column; margin-left: 10px'>
                            <h6>Model : $vehicule[model]</h6>
                            <h6>Version : $vehicule[version]</h6>
                            <h6>Annee : $vehicule[annee]</h6>
                            <h6>Prix : $vehicule[prix] $</h6>
                        </div>";
                echo"</div>";
                echo"</a>";
            }
        }else{
            echo"<h1>Vous n'avez pas encore de vehicules favoris</h1>";
        }
        echo"</div>";
    }
}