<?php

class ComparaisonView extends View{

    public function showSimple($data)
    {
        $vehicule1 = $data["vehicule1"];
        $vehicule2 = $data["vehicule2"];

        echo"
        <a href='http://localhost/cars_website_scratch_version/public/Compare/$vehicule1[vehicule_id]/$vehicule2[vehicule_id]' class='card' style='display: flex;justify-content: center;align-items: center;flex-direction: column;height: 600px;width: 400px;border-radius: 8px;background-color: white; margin: 30px; text-decoration: none;color: black'>
            <div style='display: flex;flex-direction: column;justify-content: center;align-items: center'>
                <img style='height: 200px;object-fit: contain' src=\"$vehicule1[image_path]\"/>
                <h5 style='margin: 10px'>$vehicule1[model] $vehicule1[version] $vehicule1[annee]</h5>
            </div>
            <h1>VS</h1>
            <div style='display: flex;flex-direction: column;justify-content: center;align-items: center'>
                <img style='height: 200px;object-fit: contain' src=\"$vehicule2[image_path]\"/>
                <h5 style='margin: 10px'>$vehicule2[model] $vehicule2[version] $vehicule2[annee]</h5>
            </div>
        </a>
        ";
    }

    public function show($data)
    {
        echo"<div class='section'>";
        echo"<h1>Comparaisons les plus populaires</h1>";
        echo"<div style='display: flex;flex-direction: row;'>";
            foreach ($data as $couple){
                $this->showSimple($couple);
            }
        echo"</div>";
        echo"</div>";
    }
}