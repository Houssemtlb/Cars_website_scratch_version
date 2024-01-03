<?php

class VehiculeInfosView extends View{

    public function show($data)
    {
        $vehicule = $data["vehicule"];
        $images = $data["images"];

        echo "
        <div class='section'>
            <h1>$vehicule[model]</h1>
            <div style='width:100%;display: flex; flex-direction: row; align-items: center; justify-content: space-between'>
                <div style='display: flex;flex-direction: row;align-items: center'>
                    <div style='padding-left: 30px'>
                        <h4 style='color: #43C59E; margin-left: 10px'>Anne de fabrication : </h4>
                        <h4 style='margin: 20px'>$vehicule[annee]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Moteur : </h4>
                        <h4 style='margin: 20px'>$vehicule[moteur]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Cylindree : </h4>
                        <h4 style='margin: 20px'>$vehicule[cylindree] Litres</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Consommation : </h4>
                        <h4 style='margin: 20px'>$vehicule[consommation] L/100Km</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Nombre de cylindres : </h4>
                        <h4 style='margin: 20px'>$vehicule[nb_cylindres]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Nombre de places : </h4>
                        <h4 style='margin: 20px'>$vehicule[nb_places]</h4>
                        
                    </div>
                    <div style='padding-left: 100px'>
                        <h4 style='color: #43C59E; margin-left: 10px'>Type : </h4>
                        <h4 style='margin: 20px'>$vehicule[type]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Longueur : </h4>
                        <h4 style='margin: 20px'>$vehicule[longueur]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Largeur : </h4>
                        <h4 style='margin: 20px'>$vehicule[largeur]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Hauteur : </h4>
                        <h4 style='margin: 20px'>$vehicule[hauteur]</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Prix : </h4>
                        <h4 style='margin: 20px'>$vehicule[prix] $</h4>
                        <h4 style='color: #43C59E; margin-left: 10px'>Note : </h4>
                        <h4 style='margin: 20px'>$vehicule[note] /5</h4>
                    </div>
                </div> 
                <img style='margin:40px; height: 600px;object-fit: contain' src='$images[0]' alt='logo'/>
            </div>
        </div";
    }
}