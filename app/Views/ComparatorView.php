<?php

class ComparatorView extends View{

    public function show($data)
    {
        $marques = $data['marques'];
        $vehicules = $data['vehicules'];

        if(isset($data['specificVehicule']) && isset($data['specificMarque'])){
            $specificVehicule = $data['specificVehicule'];
            $specificMarque = $data['specificMarque'];
        }

        echo "<div class='section'>";
        if(isset($data['specificVehicule']) && isset($data['specificMarque'])){
            echo "    <h1>Comparer ce vehicule</h1>";
        }else{
            echo "    <h1>Comparer des vehicules</h1>";
        }
        echo "    <div style='display: flex;flex-direction: row;justify-content: space-evenly'>";
        for($i = 1 ; $i < 5  ; $i++){
            if(isset($data['specificVehicule']) && $i == 1){
                echo "        <form class='compare'>";
                echo "            <select class='form-control compare-select' id='marque-selector$i'>";
                echo "                <option value='$specificMarque[nom]'>$specificMarque[nom]</option>";
                echo "            </select>";
                echo "            <select class='form-control compare-select' id='model-selector$i'>";
                echo "                <option value='$specificVehicule[model]' name='$specificVehicule[marque_nom]' style='display: none'>$specificVehicule[model]</option>";
                echo "            </select>";
                echo "            <select class='form-control compare-select' id='version-selector$i'>";
                echo "                <option value='$specificVehicule[version]' name='$specificVehicule[model]' style='display: none'>$specificVehicule[version]</option>";
                echo "            </select>";
                echo "            <select class='form-control compare-select' id='annee-selector$i' >";
                echo "                <option value='$specificVehicule[annee]' name='".$specificVehicule['model'].$specificVehicule['version']."' style='display: none'>$specificVehicule[annee]</option>";
                echo "            </select>";
                echo "            <select class='form-control compare-select' id='id-selector$i' style='display: none'>";
                echo "                <option value='$specificVehicule[vehicule_id]' name='".$specificVehicule['model'].$specificVehicule['version'].$specificVehicule['annee']."' style='display: none'>$specificVehicule[vehicule_id]</option>";
                echo "            </select>";
                echo "        </form>";
            }else{
                echo "        <form class='compare'>";
                echo "            <select class='form-control compare-select' id='marque-selector$i'>";
                echo "                <option selected disabled>Marque</option>";

                foreach ($marques as $marque) {
                    echo "                <option value='$marque[nom]'>$marque[nom]</option>";
                }

                echo "            </select>";
                echo "            <select class='form-control compare-select' id='model-selector$i'>";
                echo "                <option selected disabled>Model</option>";

                foreach ($vehicules as $vehicule) {
                    echo "                <option value='$vehicule[model]' name='$vehicule[marque_nom]' style='display: none'>$vehicule[model]</option>";
                }

                echo "            </select>";
                echo "            <select class='form-control compare-select' id='version-selector$i'>";
                echo "                <option selected disabled>Version</option>";

                foreach ($vehicules as $vehicule) {
                    echo "                <option value='$vehicule[version]' name='$vehicule[model]' style='display: none'>$vehicule[version]</option>";
                }

                echo "            </select>";
                echo "            <select class='form-control compare-select' id='annee-selector$i' >";
                echo "                <option selected disabled>Annee</option>";

                foreach ($vehicules as $vehicule) {
                    echo "                <option value='$vehicule[annee]' name='".$vehicule['model'].$vehicule['version']."' style='display: none'>$vehicule[annee]</option>";
                }

                echo "            </select>";
                echo "            <select class='form-control compare-select' id='id-selector$i' style='display: none'>";
                echo"              <option value='yo' selected disabled>Id</option>";
                foreach ($vehicules as $vehicule) {
                    echo "                <option value='$vehicule[vehicule_id]' name='".$vehicule['model'].$vehicule['version'].$vehicule['annee']."' style='display: none'>$vehicule[vehicule_id]</option>";
                }

                echo "            </select>";
                echo "        </form>";
            }
        }
        echo "    </div>";
        echo"<button id='compareButton' type=\"button\" class=\"btn btn-secondary btn-lg btn-block\">Comparer</button>";
        echo "<p id='compare-error' style='display: none;color: #D00000'>CHOISISSEZ AU MOINS DEUX VEHICULES</p>";
        echo "</div>";

    }
}
