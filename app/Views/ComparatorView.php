<?php

class ComparatorView extends View{

    public function show($data)
    {
        $marques = $data['marques'];
        $vehicules = $data['vehicules'];

        echo "<div class='section'>";
        echo "    <h1>Comparer des vehicules</h1>";
        echo "    <div style='display: flex;flex-direction: row;justify-content: space-evenly'>";
        for($i = 1 ; $i < 5 ; $i++){
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
        echo "    </div>";
        echo"<button id='compareButton' type=\"button\" class=\"btn btn-secondary btn-lg btn-block\">Comparer</button>";
        echo "<p id='compare-error' style='display: none;color: #D00000'>CHOISISSEZ AU MOINS DEUX VEHICULES</p>";
        echo "</div>";

    }
}
